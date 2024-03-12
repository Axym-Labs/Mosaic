<?php
use Pecee\SimpleRouter\SimpleRouter;
require 'vendor/autoload.php';

foreach (glob("src/*.php") as $filename)
{
    require $filename;
}
foreach (glob("src/**/*.php") as $filename)
{
    require $filename;
}

// ---------- CREATE CLASSES ----------
$smarty = new Smarty();
$smarty->setTemplateDir('src/templates/');

$servername = "localhost";
$username = "root";
$password = "";
$dbCon = new dbConnection($servername, $username, $password);

$logger = new FileLogger("log.txt");

$sessionManager = new SessionManager();
$notifier = new Notifier();
$tables = new tableDefinitions($dbCon);


$frontDataRetriever = new FrontDataRetriever($tables);
$subsiteDataRetriever = new SubsiteDataRetriever($tables);
$userDataRetriever = new UserDataRetriever($tables);
$pricingDataRetriever = new PricingDataRetriever($tables);

$userManager = new UserManager($tables);
$loginManager = new LoginManager($tables);
$subsiteManager = new SubsiteManager($tables);
$fragmentManager = new FragmentManager($tables);

// ---------- ASSIGN BASE DATA ----------
$smarty->assign('BusinessConstants', new BusinessConstants());
$smarty->assign('GenericRender', new GenericRender());
$smarty->assign('sessionManager', $sessionManager);

// ---------- DEV EXTRA ----------
if (BusinessConstants::$HOSTMODE == "dev") {
    $notifier->Post("You are in dev mode. This is a test", "warning");
    $smarty->assign("users", $tables->user->SelectAll());
    $smarty->assign("userColumnTypeData", $tables->user->GetColumnTypeData());

    $sessionManager->SetUserId(1);
}

// ---------- ASSIGN USER DATA ----------
if ($sessionManager->GetUserId() != null) {
    $smarty->assign('maybeUsername', $tables->user->SelectById($sessionManager->GetUserId()));
} else {
    $smarty->assign('maybeUsername', "User");
}



// ---------- GET ----------
// equivalent of select

SimpleRouter::get(BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX . '/', function() use ($frontDataRetriever, $pricingDataRetriever, $smarty, $sessionManager, $notifier, $logger) {
    $userId = $sessionManager->GetUserId();
    $logger->Log("userid: $userId");
    if ($sessionManager->IsUserLoggedIn()) {
        Redirect('Location: /a');
    }
    $smarty = $frontDataRetriever->AssignData($smarty);
    $smarty = $pricingDataRetriever->AssignData($smarty);
    DisplayTemplateOrNotFound($smarty, 'index.tpl', $notifier);
});

SimpleRouter::get(BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX . '/front', function() use ($frontDataRetriever, $smarty, $notifier, $pricingDataRetriever) {
    $smarty = $frontDataRetriever->AssignData($smarty);
    $smarty = $pricingDataRetriever->AssignData($smarty);
    DisplayTemplateOrNotFound($smarty, 'index.tpl', $notifier);
});

SimpleRouter::get(BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX . '/pricing', function() use ($frontDataRetriever, $pricingDataRetriever, $smarty, $notifier) {
    $smarty = $frontDataRetriever->AssignData($smarty);
    $smarty = $pricingDataRetriever->AssignData($smarty);
    DisplayTemplateOrNotFound($smarty, 'pricing.tpl', $notifier);
});

// user
SimpleRouter::get(BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX . '/a', function() use ($userDataRetriever, $smarty, $sessionManager, $notifier) {
    $userId = $sessionManager->GetUserId();
    if (!$sessionManager->IsUserLoggedIn()) {
        Redirect('Location: /login');
    }
    $smarty = $userDataRetriever->AssignData($smarty, $userId, true);
    DisplayTemplateOrNotFound($smarty, 'user.tpl', $notifier);
});

SimpleRouter::get(BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX . '/login', function() use ($smarty, $sessionManager, $notifier) {
    $userId = $sessionManager->GetUserId();
    if ($sessionManager->IsUserLoggedIn()) {
        Redirect('Location: /a');
    }
    DisplayTemplateOrNotFound($smarty, 'login.tpl', $notifier);
});

SimpleRouter::get(BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX . '/create/user', function() use ($smarty, $sessionManager, $notifier, $logger) {
    $logger->Log("create/user");
    $userId = $sessionManager->GetUserId();
    if ($sessionManager->IsUserLoggedIn()) {
        $logger->Log("create/user: redirecting to /a");
        Redirect('Location: /a');
    }
    DisplayTemplateOrNotFound($smarty, 'createUser.tpl', $notifier);
});

SimpleRouter::get(BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX . '/create/subsite', function() use ($smarty, $sessionManager, $notifier) {
    $userId = $sessionManager->GetUserId();
    if ($sessionManager->IsUserLoggedIn()) {
        Redirect('Location: /a');
    }
    DisplayTemplateOrNotFound($smarty, 'createSubsite.tpl', $notifier);
});

SimpleRouter::get(BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX . '/logout', function() use ($sessionManager, $notifier) {
    $sessionManager->SetUserId(null);
    Redirect('Location: /login');
});

SimpleRouter::get(BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX . '/u/{uname}', function($userName) use ($userDataRetriever, $smarty, $notifier) {
    $smarty = $userDataRetriever->AssignDataByUsername($smarty, $userName, false);
    DisplayTemplateOrNotFound($smarty, 'user.tpl', $notifier);
});

// product

SimpleRouter::get(BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX . '/s-id/{sid}', function($subsiteId) use ($subsiteDataRetriever, $smarty, $notifier) {
    $smarty = $subsiteDataRetriever->AssignData($smarty, $subsiteId, false);
    DisplayTemplateOrNotFound($smarty, 'subsite.tpl', $notifier);
});

SimpleRouter::get(BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX . '/s/{sroute}', function($subsiteShortRoute) use ($subsiteDataRetriever, $smarty, $notifier) {
    $smarty = $subsiteDataRetriever->AssignDataByShortRoute($smarty, $subsiteShortRoute, false);
    DisplayTemplateOrNotFound($smarty, 'subsite.tpl', $notifier);
});

SimpleRouter::get(BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX . '/u/{uname}/{sroute}', function($userName, $subsiteRoute) use ($subsiteDataRetriever, $smarty, $notifier) {
    $smarty = $subsiteDataRetriever->AssignDataByRoute($smarty, $userName, $subsiteRoute, false);
    DisplayTemplateOrNotFound($smarty, 'subsite.tpl', $notifier);
});

SimpleRouter::get(BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX . '/edit/s/{sid}', function($subsiteId) use ($subsiteDataRetriever, $smarty, $sessionManager, $notifier, $tables) {
    $userId = $sessionManager->GetUserId();
    if (!$sessionManager->IsUserLoggedIn()) {
        $notifier->Post("Log in, then visit the url again", "error");
        Redirect('Location: /login');
    }
    if (!AuthorizationCheck::IsAuthorizedSubsite($subsiteId, $userId, $tables)) {
        $notifier->Post("You are not authorized to edit this subsite", "error");
        Redirect('Location: /s/' . $subsiteId);
    }
    $smarty = $subsiteDataRetriever->AssignData($smarty, $subsiteId, true);
    DisplayTemplateOrNotFound($smarty, 'subsiteEdit.tpl', $notifier);
});

SimpleRouter::get(BusinessConstants::$UNIVERSAL_PAGE_ROUTE_PREFIX . '/edit/s/{sid}/create-f', function($subsiteId) use ($smarty, $sessionManager, $notifier, $tables) {
    $userId = $sessionManager->GetUserId();
    if (!$sessionManager->IsUserLoggedIn()) {
        $notifier->Post("Log in, then visit the url again", "error");
        Redirect('Location: /login');
    }
    if (!AuthorizationCheck::IsAuthorizedSubsite($subsiteId, $userId, $tables)) {
        $notifier->Post("You are not authorized to edit this fragment", "error");
        Redirect('Location: /edit/s/' . $subsiteId);
    }

    DisplayTemplateOrNotFound($smarty, 'createFragment.tpl', $notifier);
});

// ---------- POST ----------

// user
SimpleRouter::post('/a', function() use ($userManager, $sessionManager, $smarty, $userDataRetriever, $notifier) {
    $userId = $sessionManager->GetUserId();
    if (!$sessionManager->IsUserLoggedIn()) {
        $notifier->Post("Log in, then visit the url again", "error");
        Redirect('Location: /login');
    }
    list($updateSuccess, $notifier) = $userManager->HandleUpdate($userId, $notifier);

    $smarty = $userDataRetriever->AssignData($smarty, $userId, true);
    DisplayTemplateOrNotFound($smarty, 'user.tpl', $notifier);
});

SimpleRouter::post('/login', function() use ($loginManager, $sessionManager, $notifier, $smarty) {
    list($loginSuccess, $notifier) = $loginManager->HandlePost($sessionManager, $notifier);
    
    if ($loginSuccess) {
        Redirect('Location: /a');
    } else {
        DisplayTemplateOrNotFound($smarty, 'login.tpl', $notifier);
    }
});

SimpleRouter::post('/create/user', function() use ($userManager, $sessionManager, $notifier, $smarty) {
    $userId = $sessionManager->GetUserId();
    if ($sessionManager->IsUserLoggedIn()) {
        Redirect('Location: /a');
    }

    list($usercreationSuccess, $notifier) = $userManager->HandleCreate($sessionManager, $notifier);
    
    if ($usercreationSuccess) {
        Redirect('Location: /a');
    } else {
        DisplayTemplateOrNotFound($smarty, 'createUser.tpl', $notifier);
    }
});

// subsite
SimpleRouter::post('/edit/s/{sid}', function($subsiteId) use ($subsiteManager, $sessionManager, $notifier, $smarty, $subsiteDataRetriever, $tables) {
    $userId = $sessionManager->GetUserId();
    if (!$sessionManager->IsUserLoggedIn()) {
        $notifier->Post("Log in, then visit the url again", "error");
        Redirect('Location: /login');
    }
    if (!AuthorizationCheck::IsAuthorizedSubsite($subsiteId, $userId, $tables)) {
        $notifier->Post("You are not authorized to edit this subsite", "error");
        Redirect('Location: /s/' . $subsiteId);
    }
    list($editSuccess, $notifier) = $subsiteManager->HandleUpdate($subsiteId, $userId, $notifier);

    $smarty = $subsiteDataRetriever->AssignData($smarty, $subsiteId, true);
    DisplayTemplateOrNotFound($smarty, 'subsiteEdit.tpl', $notifier);
});

// subsite
SimpleRouter::post('/create/subsite', function() use ($subsiteManager, $sessionManager, $notifier, $smarty, $subsiteDataRetriever, $tables) {
    $userId = $sessionManager->GetUserId();
    if (!$sessionManager->IsUserLoggedIn()) {
        $notifier->Post("Log in, then visit the url again", "error");
        Redirect('Location: /login');
    }
    list($creationSuccess, $subsiteId) = $subsiteManager->HandleCreate($userId, $notifier);

    if (!$creationSuccess) {
        $smarty->display('createSubsite.tpl');
    } else {
        Redirect('Location: /edit/s/' . $subsiteId);
    }
});

// subsite
SimpleRouter::post('/edit/s/{sid}/update-f/{fid}', function($subsiteId, $fragmentId) use ($fragmentManager, $sessionManager, $notifier, $tables) {
    $userId = $sessionManager->GetUserId();
    if (!$sessionManager->IsUserLoggedIn()) {
        $notifier->Post("Log in, then visit the url again", "error");
        Redirect('Location: /login');
    }
    if (!AuthorizationCheck::IsAuthorizedSubsite($subsiteId, $userId, $tables)) {
        $notifier->Post("You are not authorized to edit this fragment", "error");
        Redirect('Location: /s/' . $subsiteId);
    }
    list($editSuccess, $notifier) = $fragmentManager->HandleUpdate($fragmentId, $subsiteId, $notifier);

    Redirect('Location: /edit/s/' . $subsiteId);
});

SimpleRouter::post('/edit/s/{sid}/create-f', function($subsiteId) use ($fragmentManager, $sessionManager, $notifier, $tables) {
    $userId = $sessionManager->GetUserId();
    if (!$sessionManager->IsUserLoggedIn()) {
        $notifier->Post("Log in, then visit the url again", "error");
        Redirect('Location: /login');
    }
    if (!AuthorizationCheck::IsAuthorizedSubsite($subsiteId, $userId, $tables)) {
        $notifier->Post("You are not authorized to edit this fragment", "error");
        Redirect('Location: /s/' . $subsiteId);
    }
    list($createSuccess, $notifier) = $fragmentManager->HandleCreate($subsiteId, $notifier);

    Redirect('Location: /edit/s/' . $subsiteId);
});

// delete

SimpleRouter::post('/delete/s/{sid}', function($subsiteId) use ($subsiteManager, $sessionManager, $notifier, $smarty, $subsiteDataRetriever, $tables) {
    $userId = $sessionManager->GetUserId();
    if (!$sessionManager->IsUserLoggedIn()) {
        $notifier->Post("Log in, then visit the url again", "error");
        Redirect('Location: /login');
    }
    if (!AuthorizationCheck::IsAuthorizedSubsite($subsiteId, $userId, $tables)) {
        $notifier->Post("You are not authorized to edit this subsite", "error");
        Redirect('Location: /s/' . $subsiteId);
    }
    list($deleteSuccess, $notifier) = $subsiteManager->HandleDelete($subsiteId, $notifier);

    Redirect('Location: /a');
});

SimpleRouter::post('/edit/s/{sid}/delete-f/{fid}', function($subsiteId, $fragmentId) use ($fragmentManager, $sessionManager, $notifier, $tables) {
    $userId = $sessionManager->GetUserId();
    if (!$sessionManager->IsUserLoggedIn()) {
        $notifier->Post("Log in, then visit the url again", "error");
        Redirect('Location: /login');
    }
    if (!AuthorizationCheck::IsAuthorizedSubsite($subsiteId, $userId, $tables)) {
        $notifier->Post("You are not authorized to edit this fragment", "error");
        Redirect('Location: /s/' . $subsiteId);
    }
    list($deleteSuccess, list($notifier, $notifier)) = $fragmentManager->HandleDelete($fragmentId, $notifier);

    Redirect('Location: /edit/s/' . $subsiteId);
});


function DisplayTemplateOrNotFound($smarty, $template, $maybeNotifier) {
    if ($maybeNotifier != null) {
        $smarty->assign('notifier', $maybeNotifier);
    }
    if (!$smarty->getTemplateVars('NotFoundError') && $smarty->templateExists($template)) {
        $smarty->display($template);
    } else {
        if (!$smarty->getTemplateVars('NotFoundError')) {
            $smarty->assign('NotFoundError', "Page not found");
        }
        $smarty->display('notfound.tpl');
    }
}

function Redirect($url, $statuscode = 303) {
    echo "Attempting redirect to: $url\n";
    Redirect('Location: ' . $url, true, $statuscode);
    die();
}

SimpleRouter::error(function($exception) use ($smarty) {
    $smarty->assign('NotFoundError', "Page not found");
    $smarty->display('notfound.tpl');
});

SimpleRouter::start();

?>
