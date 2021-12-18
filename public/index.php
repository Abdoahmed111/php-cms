 <?php

$section = $_GET['section'] ?? 'home';

if ($section == 'about-us') {
    include 'controller/aboutUs.controller.php';
} else if ($section == 'contact-us') {
    include 'controller/contactUs.controller.php';
} else {
    include 'controller/homePage.controller.php';
}