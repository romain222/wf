<?php
namespace Adv_Ex1\insertFile;

function insertFile($arrayOfData){
    $resource = fopen('file.csv', 'w+');
    
    foreach ($arrayOfData as $currentArray){
        fputcsv($resource, $currentArray);
    }
    fclose($resource);
}