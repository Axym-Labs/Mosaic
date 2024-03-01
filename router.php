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

$otherDataRetriever = new OtherDataRetriever($dbCon);
$subsiteDataRetriever = new SubsiteDataRetriever($dbCon);
$accountDataRetriever = new AccountDataRetriever($dbCon);

// GET
// equivalent of select

SimpleRouter::get('/', function() use ($otherDataRetriever, $smarty, $sessionManager) {
    $userId = $sessionManager::GetUserId();
    if ($userId != null) {
        header('Location: /a');
    }
    $smarty = $otherDataRetriever->AssignData($smarty);
    $smarty->display('index.tpl');
});

SimpleRouter::get('/front', function() use ($otherDataRetriever, $smarty) {
    $smarty = $otherDataRetriever->AssignData($smarty);
    $smarty->display('index.tpl');
});

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

SimpleRouter::get('/s/{sid}', function($subsiteId) use ($accountDataRetriever, $smarty) {
    $smarty = $accountDataRetriever->AssignData($smarty, $subsiteId);
    $smarty->display('subsite.tpl');
});

SimpleRouter::get('/dashboard/{sid}', function($subsiteId) use ($accountDataRetriever, $smarty) {
    $smarty = $accountDataRetriever->AssignData($smarty, $subsiteId, true);
    $smarty->display('subsiteEdit.tpl');
});

// POST





SimpleRouter::start();

?>