<?php
namespace Adv_Ex1\getFile;

function getFile($fileURL){
    $resource = file_get_contents($fileURL);
    return $resource;
}