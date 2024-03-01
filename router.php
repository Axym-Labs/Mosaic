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

$FrontpageDataRetriever = new OtherDataRetriever($dbCon);
$subsiteDataRetriever = new SubsiteDataRetriever($dbCon);
$accountDataRetriever = new AccountDataRetriever($dbCon);
$pricingDataRetriever = new PricingDataRetriever($dbCon);

$accountDataManager = new AccountDataManager($dbCon);
$loginDataManager = new LoginDataManager($dbCon);
$subsiteDataManager = new SubsiteDataManager($dbCon);

// ---------- GET ----------
// equivalent of select

SimpleRouter::get('/', function() use ($FrontpageDataRetriever, $smarty, $sessionManager) {
    $userId = $sessionManager::GetUserId();
    if ($userId != null) {
        header('Location: /a');
    }
    $smarty = $FrontpageDataRetriever->AssignData($smarty);
    $smarty->display('index.tpl');
});

SimpleRouter::get('/front', function() use ($FrontpageDataRetriever, $smarty) {
    $smarty = $FrontpageDataRetriever->AssignData($smarty);
    $smarty->display('index.tpl');
});

SimpleRouter::get('/pricing', function() use ($FrontpageDataRetriever, $smarty) {
    $smarty = $FrontpageDataRetriever->AssignData($smarty);
    $smarty->display('pricing.tpl');
});

// account
SimpleRouter::get('/a', function() use ($accountDataRetriever, $smarty, $sessionManager) {
    $userId = $sessionManager::GetUserId();
    if ($userId == null) {
        header('Location: /login');
    }
    $smarty = $accountDataRetriever->AssignData($smarty, $userId);
    $smarty->display('account.tpl');
});

SimpleRouter::get('/login', function() use ($accountDataRetriever, $smarty, $sessionManager) {
    $userId = $sessionManager::GetUserId();
    if ($userId != null) {
        header('Location: /a');
    }
    $smarty = $accountDataRetriever->AssignData($smarty, $userId);
    $smarty->display('login.tpl');
});

SimpleRouter::get('/logout', function() use ($sessionManager) {
    $sessionManager::SetUserId(null);
    header('Location: /');
});

SimpleRouter::get('/u/{uid}', function($userId) use ($accountDataRetriever, $smarty) {
    $smarty = $accountDataRetriever->AssignData($smarty, $userId);
    $smarty->display('account.tpl');
});

// product
SimpleRouter::get('/s/{sid}', function($subsiteId) use ($accountDataRetriever, $smarty) {
    $smarty = $accountDataRetriever->AssignData($smarty, $subsiteId);
    $smarty->display('subsite.tpl');
});

SimpleRouter::get('/edit/s/{sid}', function($subsiteId) use ($accountDataRetriever, $smarty) {
    $smarty = $accountDataRetriever->AssignData($smarty, $subsiteId, true);
    $smarty->display('subsiteEdit.tpl');
});

// ---------- POST ----------

// account
SimpleRouter::post('/a', function() use ($accountDataManager, $sessionManager) {
    $userId = $sessionManager::GetUserId();
    if ($userId != null) {
        header('Location: /a');
    }
    $accountDataManager->HandlePost($sessionManager);
});

SimpleRouter::post('/login', function() use ($loginDataManager, $sessionManager) {
    $loginDataManager->HandlePost($sessionManager);
});

// subsite
SimpleRouter::post('/edit/s/{sid}', function($subsiteId) use ($subsiteDataManager, $sessionManager) {
    $subsiteDataManager->HandlePost($subsiteId, $sessionManager);
});

SimpleRouter::start();

?>