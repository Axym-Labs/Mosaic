<?php
use Pecee\SimpleRouter\SimpleRouter;
// use Smarty\Smarty\Smarty;
require 'vendor/autoload.php';

$smarty = new Smarty();
$smarty->setTemplateDir('/templates');

$servername = "localhost";
$username = "root";
$password = "";

$dbCon = new dbConnection($servername, $username, $password);
$sessionManager = new SessionManager();
$notifier = new Notifier();

$frontDataRetriever = new FrontDataRetriever($dbCon);
$subsiteDataRetriever = new SubsiteDataRetriever($dbCon);
$accountDataRetriever = new AccountDataRetriever($dbCon);
$pricingDataRetriever = new PricingDataRetriever($dbCon);

$accountManager = new AccountManager($dbCon);
$loginManager = new LoginManager($dbCon);
$subsitManager = new SubsiteManager($dbCon);

// ---------- GET ----------
// equivalent of select

SimpleRouter::get('/', function() use ($frontDataRetriever, $smarty, $sessionManager) {
    $userId = $sessionManager::GetUserId();
    if ($userId != null) {
        header('Location: /a');
    }
    $smarty = $frontDataRetriever->AssignData($smarty);
    $smarty->display('index.tpl');
});

SimpleRouter::get('/front', function() use ($frontDataRetriever, $smarty) {
    $smarty = $frontDataRetriever->AssignData($smarty);
    $smarty->display('index.tpl');
});

SimpleRouter::get('/pricing', function() use ($frontDataRetriever, $smarty) {
    $smarty = $frontDataRetriever->AssignData($smarty);
    $smarty->display('pricing.tpl');
});

// account
SimpleRouter::get('/a', function() use ($accountDataRetriever, $smarty, $sessionManager) {
    $userId = $sessionManager::GetUserId();
    if ($userId == null) {
        header('Location: /login');
    }
    $smarty = $accountDataRetriever->AssignData($smarty, $userId, true);
    $smarty->display('account.tpl');
});

SimpleRouter::get('/login', function() use ($smarty, $sessionManager) {
    $userId = $sessionManager::GetUserId();
    if ($userId != null) {
        header('Location: /a');
    }
    $smarty->display('login.tpl');
});

SimpleRouter::get('/logout', function() use ($sessionManager) {
    $sessionManager::SetUserId(null);
    header('Location: /login');
});

SimpleRouter::get('/u/{uname}', function($userName) use ($accountDataRetriever, $smarty) {
    $smarty = $accountDataRetriever->AssignDataByUsername($smarty, $userName, false);
    $smarty->display('account.tpl');
});

// product
SimpleRouter::get('/s/{sid}', function($subsiteId) use ($subsiteDataRetriever, $smarty) {
    $smarty = $subsiteDataRetriever->AssignData($smarty, $subsiteId, false);
    $smarty->display('subsite.tpl');
});

SimpleRouter::get('/s/{sname}', function($subsiteName) use ($subsiteDataRetriever, $smarty) {
    $smarty = $subsiteDataRetriever->AssignDataBySubsiteName($smarty, $subsiteName, false);
    $smarty->display('subsite.tpl');
});

SimpleRouter::get('/edit/s/{sid}', function($subsiteId) use ($subsiteDataRetriever, $smarty) {
    $smarty = $subsiteDataRetriever->AssignData($smarty, $subsiteId, true);
    $smarty->display('subsiteEdit.tpl');
});

SimpleRouter::get("/new/s", function($subsiteId) use ($accountDataRetriever, $smarty, $sessionManager, $notifier, $subsiteCreator) {
    list($creationSuccess, $subsiteId) = $subsiteCreator->CreateNew($subsiteId, $sessionManager::GetUserId(), $notifier);
    
    if ($creationSuccess) {
        header('Location: /edit/s/' + $subsiteId);
    } else {
        header('Location: /a');
    }
});

// ---------- POST ----------

// account
SimpleRouter::post('/a', function() use ($accountManager, $sessionManager, $smarty, $accountDataRetriever, $notifier) {
    $userId = $sessionManager::GetUserId();
    if ($userId != null) {
        header('Location: /login');
    }
    $accountManager->HandlePost($userId, $notifier);

    $smarty = $accountDataRetriever->AssignData($smarty, $userId, true);
    $smarty->display('account.tpl');
});

SimpleRouter::post('/login', function() use ($loginManager, $sessionManager, $notifier, $smarty, $accountDataRetriever) {
    $loginSuccess = $loginManager->HandlePost($sessionManager, $notifier);
    
    if ($loginSuccess) {
        header('Location: /a');
    } else {
        $smarty->display('login.tpl');
    }
});

// subsite
SimpleRouter::post('/edit/s/{sid}', function($subsiteId) use ($subsiteManager, $sessionManager, $notifier, $smarty, $accountDataRetriever) {
    $userId = $sessionManager::GetUserId();
    if ($userId == null) {
        $notifier->Post("Log in, then visit the url again", "error");
        header('Location: /login');
    }
    $editSuccess = $subsiteManager->HandlePost($subsiteId, $userId, $notifier);

    $smarty = $accountDataRetriever->AssignData($smarty, $subsiteId, true);
    $smarty->display('subsiteEdit.tpl');
});

SimpleRouter::start();

?>
