<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

if(!empty($_POST)){
$_SESSION["username"] = filter_input(INPUT_POST,"username", FILTER_SANITIZE_STRING);
$_SESSION["colour"] = filter_input(INPUT_POST,"colour", FILTER_SANITIZE_STRING);
$_SESSION["animal"] = filter_input(INPUT_POST,"animal", FILTER_SANITIZE_STRING);
}

if(!empty($_SESSION)){
    echo "Welcome " . $_SESSION["username"] . '<br>';
    echo "Your favourite colour is " . $_SESSION["colour"] . '<br>';
    echo "Your favourite animal is " . $_SESSION["animal"] . '<br>';
    echo "<a href='SessionPostPage2.php'>Go to Page 2</a>" . '<br>';
}