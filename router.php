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
$subsiteManager = new SubsiteManager($dbCon);
$fragmentManager = new FragmentManager($dbCon);

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

SimpleRouter::get('/create/account', function() use ($smarty, $sessionManager) {
    $userId = $sessionManager::GetUserId();
    if ($userId != null) {
        header('Location: /a');
    }
    $smarty->display('createAccount.tpl');
});

SimpleRouter::get('/create/subsite', function() use ($smarty, $sessionManager) {
    $userId = $sessionManager::GetUserId();
    if ($userId != null) {
        header('Location: /a');
    }
    $smarty->display('createSubsite.tpl');
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

SimpleRouter::get('/u/{uname}/{sroute}', function($userName, $subsiteRoute) use ($subsiteDataRetriever, $smarty) {
    $smarty = $subsiteDataRetriever->AssignDataByRoute($smarty, $userName, $subsiteRoute, false);
    $smarty->display('subsite.tpl');
});

SimpleRouter::get('/edit/s/{sid}', function($subsiteId) use ($subsiteDataRetriever, $smarty, $sessionManager, $notifier, $tables) {
    $userId = $sessionManager::GetUserId();
    if ($userId == null) {
        $notifier->Post("Log in, then visit the url again", "error");
        header('Location: /login');
    }
    if (!AuthorizationCheck::IsAuthorizedSubsite($subsiteId, $userId, $tables)) {
        $notifier->Post("You are not authorized to edit this subsite", "error");
        header('Location: /s/' + $subsiteId);
    }
    $smarty = $subsiteDataRetriever->AssignData($smarty, $subsiteId, true);
    $smarty->display('subsiteEdit.tpl');
});

SimpleRouter::get('/edit/s/{sid}/create-f', function($subsiteId) use ($smarty, $sessionManager, $notifier, $tables) {
    $userId = $sessionManager::GetUserId();
    if ($userId == null) {
        $notifier->Post("Log in, then visit the url again", "error");
        header('Location: /login');
    }
    if (!AuthorizationCheck::IsAuthorizedSubsite($subsiteId, $userId, $tables)) {
        $notifier->Post("You are not authorized to edit this fragment", "error");
        header('Location: /s/' + $subsiteId);
    }

    $smarty->display('createFragment.tpl');
});

// ---------- POST ----------

// account
SimpleRouter::post('/a', function() use ($accountManager, $sessionManager, $smarty, $accountDataRetriever, $notifier) {
    $userId = $sessionManager::GetUserId();
    if ($userId == null) {
        $notifier->Post("Log in, then visit the url again", "error");
        header('Location: /login');
    }
    $accountManager->HandleUpdate($userId, $notifier);

    $smarty = $accountDataRetriever->AssignData($smarty, $userId, true);
    $smarty->display('account.tpl');
});

SimpleRouter::post('/login', function() use ($loginManager, $sessionManager, $notifier, $smarty) {
    $loginSuccess = $loginManager->HandlePost($sessionManager, $notifier);
    
    if ($loginSuccess) {
        header('Location: /a');
    } else {
        $smarty->display('login.tpl');
    }
});

SimpleRouter::post('/create/account', function() use ($accountManager, $sessionManager, $notifier, $smarty) {
    $userId = $sessionManager::GetUserId();
    if ($userId != null) {
        header('Location: /a');
    }

    $accountcreationSuccess = $accountManager->HandleCreate($sessionManager, $notifier);
    
    if ($accountcreationSuccess) {
        header('Location: /a');
    } else {
        $smarty->display('createAccount.tpl');
    }
});

// subsite
SimpleRouter::post('/edit/s/{sid}', function($subsiteId) use ($subsiteManager, $sessionManager, $notifier, $smarty, $subsiteDataRetriever, $tables) {
    $userId = $sessionManager::GetUserId();
    if ($userId == null) {
        $notifier->Post("Log in, then visit the url again", "error");
        header('Location: /login');
    }
    if (!AuthorizationCheck::IsAuthorizedSubsite($subsiteId, $userId, $tables)) {
        $notifier->Post("You are not authorized to edit this subsite", "error");
        header('Location: /s/' + $subsiteId);
    }
    $editSuccess = $subsiteManager->HandleUpdate($subsiteId, $userId, $notifier);

    $smarty = $subsiteDataRetriever->AssignData($smarty, $subsiteId, true);
    $smarty->display('subsiteEdit.tpl');
});

// subsite
SimpleRouter::post('/create/subsite', function() use ($subsiteManager, $sessionManager, $notifier, $smarty, $subsiteDataRetriever, $tables) {
    $userId = $sessionManager::GetUserId();
    if ($userId == null) {
        $notifier->Post("Log in, then visit the url again", "error");
        header('Location: /login');
    }
    list($creationSuccess, $subsiteId) = $subsiteManager->HandleCreate($userId, $notifier);

    if (!$creationSuccess) {
        $smarty->display('createSubsite.tpl');
    } else {
        header('Location: /edit/s/' + $subsiteId);
    }
});

// subsite
SimpleRouter::post('/edit/s/{sid}/update-f/{fid}', function($subsiteId, $fragmentId) use ($fragmentManager, $sessionManager, $notifier, $tables) {
    $userId = $sessionManager::GetUserId();
    if ($userId == null) {
        $notifier->Post("Log in, then visit the url again", "error");
        header('Location: /login');
    }
    if (!AuthorizationCheck::IsAuthorizedSubsite($subsiteId, $userId, $tables)) {
        $notifier->Post("You are not authorized to edit this fragment", "error");
        header('Location: /s/' + $subsiteId);
    }
    $editSuccess = $fragmentManager->HandleUpdate($fragmentId, $subsiteId, $notifier);

    header('Location: /edit/s/' + $subsiteId);
});

SimpleRouter::post('/edit/s/{sid}/create-f', function($subsiteId) use ($fragmentManager, $sessionManager, $notifier, $tables) {
    $userId = $sessionManager::GetUserId();
    if ($userId == null) {
        $notifier->Post("Log in, then visit the url again", "error");
        header('Location: /login');
    }
    if (!AuthorizationCheck::IsAuthorizedSubsite($subsiteId, $userId, $tables)) {
        $notifier->Post("You are not authorized to edit this fragment", "error");
        header('Location: /s/' + $subsiteId);
    }
    $createSuccess = $fragmentManager->HandleCreate($subsiteId, $notifier);

    header('Location: /edit/s/' + $subsiteId);
});

// delete

SimpleRouter::post('/delete/s/{sid}', function($subsiteId) use ($subsiteManager, $sessionManager, $notifier, $smarty, $subsiteDataRetriever, $tables) {
    $userId = $sessionManager::GetUserId();
    if ($userId == null) {
        $notifier->Post("Log in, then visit the url again", "error");
        header('Location: /login');
    }
    if (!AuthorizationCheck::IsAuthorizedSubsite($subsiteId, $userId, $tables)) {
        $notifier->Post("You are not authorized to edit this subsite", "error");
        header('Location: /s/' + $subsiteId);
    }
    $deleteSuccess = $subsiteManager->HandleDelete($subsiteId);

    header('Location: /a');
});

SimpleRouter::post('/edit/s/{sid}/delete-f/{fid}', function($subsiteId, $fragmentId) use ($fragmentManager, $sessionManager, $notifier, $tables) {
    $userId = $sessionManager::GetUserId();
    if ($userId == null) {
        $notifier->Post("Log in, then visit the url again", "error");
        header('Location: /login');
    }
    if (!AuthorizationCheck::IsAuthorizedSubsite($subsiteId, $userId, $tables)) {
        $notifier->Post("You are not authorized to edit this fragment", "error");
        header('Location: /s/' + $subsiteId);
    }
    $deleteSuccess = $fragmentManager->HandleDelete($fragmentId);

    header('Location: /edit/s/' + $subsiteId);
});


SimpleRouter::start();

?>
