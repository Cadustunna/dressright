<?php
$controller = isset($_GET['controller']) ? $_GET['controller'] : '';
$action = isset($_GET['action']) ? $_GET['action'] : '';

// Check if it's the Admin Page
$isAdminPage = ($controller === 'admin');
$isAdminLoginPage = ($isAdminPage && $action === 'index'); // Ensure index action has a plain page


if (!$isAdminPage) {
    require_once('views/includes/header.php');
    require_once('views/includes/navbar.php');
} elseif (!$isAdminLoginPage) { 
    // Load backend headers, navbar & sidebar if not Admin Login page
    require_once('views/inc/header.php');
    require_once('views/inc/navbar.php');
    require_once('views/inc/sidebar.php');
}


?>

<div class="container-fluid">
    <div class="row">
        <?php Message::display(); ?> 
        <?php require_once($view); ?>
    </div>
</div>

<?php
// Load footer only if it's not the login page
if (!$isAdminPage) {
    require_once('views/includes/footer.php');
} elseif (!$isAdminLoginPage) {
    require_once('views/inc/footer.php');
}

?>
