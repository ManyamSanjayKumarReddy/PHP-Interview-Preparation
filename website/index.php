<!DOCTYPE html>
<html>
<head>
    <title>Website</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=about">About</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
        </ul>
    </nav>
    
 
</body>
</html>
<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    
    if ($page === 'home') {
        include 'home.php';
    } elseif ($page === 'about') {
        include 'about.php';
    } elseif ($page === 'contact') {
        include 'contact.php';
    }
    ?>