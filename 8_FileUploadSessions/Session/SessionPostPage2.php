<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

if(!empty($_SESSION)){
    //check what is in the session with var dump
    var_dump($_SESSION);
    echo "Hiya " . $_SESSION["username"] . '<br>';
    echo "Your favourite colour is " . $_SESSION["colour"] . '<br>';
    echo "Your favourite animal is " . $_SESSION["animal"] . '<br>';
    //click to send to logout page and end session
    echo "<a href='SessionPostPage3.php'>Logout</a><br>";
}