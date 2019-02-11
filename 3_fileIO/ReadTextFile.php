<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$path = 'people.txt';
//check file exists and is readable and writeable
if(file_exists($path)
        && is_readable($path)
        && is_writable($path)) {
 
 //$fileresource = fopen($path, 'r');

//using fgets to read line by line - needs opening and closing by line 15 and 32

/*while(! feof($fileresource) 
        && $line = fgets($fileresource))
{
    echo explode("/t", $line)[0];
    echo PHP_EOL;
} */


//using fread to look into the file - needs to be opened and closed by line 15 and 32
//echo $contents = fread($fileresource, filesize($path));



//fclose($fileresource);


// using file get contents - does not need to be opened or closed
// puts into one string
//echo $contents = file_get_contents($path);

//using file - does not need to be opened or closed
// puts into indexed array by lines
$line = file($path);
echo $line[0];
echo $line[1];
echo $line[2];
echo $line[3];
    
}

else {
    echo "The file $filename is not writable";
}