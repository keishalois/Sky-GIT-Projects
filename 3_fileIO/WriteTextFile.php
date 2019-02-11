<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$path = 'people.txt';
$dataName = "Marge Simpson";
$dataEmail = "marge@springfield.com";
$dataPhone = "555-332-221";
//check file exists and is readable and writable
if(file_exists($path)
        && is_readable($path)
        && is_writable($path)) {
    //open file
         $fileresource = fopen($path, 'a+');

    //if it cannot write variables to file then tells user error
     if (fwrite($fileresource, "$dataName \t $dataEmail \t $dataPhone") === FALSE) {
        echo "Cannot write to file ($path)";
        exit;
    } //otherwise let user know it can write to file
    else {
    echo "Success, wrote ($dataName) and ($dataEmail) and ($dataPhone) to file ($path)";}

    fclose($fileresource);

        }
else {
    echo "The file $path is not writable";
}