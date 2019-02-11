<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$path = 'Books.xml';

$xmlNodes = simplexml_load_file($path) or die("Error - cannot create object");
print_r($xmlNodes);
echo "Read XML in a loop \n";
foreach($xmlNodes->children() as $books)
    {
        echo $books->title . " - ";
        echo $books->author . " published ";
        echo $books->year . " - £";
        echo $books->price . PHP_EOL;
}