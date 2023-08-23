<?php
    setcookie("fav_food", "pizza", time() + 15 * 2, "/");
    setcookie("fav_drink", "coffee", time() + 84000 * 2, "/");

    foreach($_COOKIE as $key => $value){
        echo "{$key} => {$value} <br>";
    }
?>