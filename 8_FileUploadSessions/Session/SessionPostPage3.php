<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
//clear session
session_unset();
//destroy session
session_destroy();

if(empty($_SESSION)){
//send back to start
    echo "Hello guest " . '<br>';
    echo "<a href='../Session.html'>Log In Here!</a><br>";
}
