<?php
// Main page controller for profile.
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Include the header and navigation.
include 'includes/header.php';

// Determine which page to include based on the 'page' parameter.
switch ($page) {
    case 'about':
        include 'about.php';
        break;
    case 'projects':
        include 'projects.php';
        break;
    case 'contact':
        include 'contact.php';
        break;
    case 'success':
        include 'success.php';
        break;
    case 'home':
    default:
        include 'home-content.php';
        break;
}

// Include the footer.
include 'includes/footer.php';