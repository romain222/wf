<?php

function easterReverse($filePath){
    //GET FILE
    $resource = fopen($filePath, 'r+');
    $fileContent = fread($resource, filesize($filePath));
    
    //GET SECOND PART AS STRING
    fseek($resource, floor(strlen($fileContent) / 2), SEEK_SET);
    $secondPart = '';
    do{
        $secondPart .= fgets($resource);
    }while(ftell($resource) < filesize($filePath) );
    
    //REVERSE SECOND PART STRING
    $secondPart = strrev($secondPart);
    
    //OVERWRITE SECOND PART USING NEW STRING
    fseek($resource, floor(strlen($fileContent) / 2), SEEK_SET);
    fwrite($resource, $secondPart, strlen($secondPart));
    
    fclose($resource);
}