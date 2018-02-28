<?php

function getAllMondaysOfMonth($year, $month){
    $dateString = $year."-".$month."-01";
    $myDate =  DateTime::createFromFormat('Y-m-d', $dateString);
    $interval =  DateInterval::createFromDateString('+7day');
    
    $currentMonth = DateTime::createFromFormat('Ym', $year.$month);
    $firstMonday = new DateTime('first monday of '.$currentMonth->format('F Y'));
    $lastMonday = new DateTime('last monday of '.$currentMonth->format('F Y'));
    
    $to = new DateTime('last day of ' . $currentMonth->format('F Y'));
    
    $returnArray = [];
    
    while($firstMonday <= $lastMonday){
        
        array_push($returnArray, $firstMonday->format('l j, M Y'));
        $firstMonday->add($interval);
    }
    
    return $returnArray;
}