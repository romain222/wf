<?php

$input;

$APoints = 0;
$BPoints = 0;

foreach ($input AS $currentTurn){
    if($currentTurn[0] > $currentTurn[1]) $APoints++;
    if($currentTurn[0] < $currentTurn[1]) $BPoints++;
}


if($APoints > $BPoints){
    $winner = 'A';
}else{
    $winner = 'B';
}
echo $winner;
