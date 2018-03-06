<?php
function divide(int $value, int $divisor){
    if($divisor == 0){
        throw new RuntimeException('Division by 0 is not allowed');
    }
    return ($value/$divisor);
}

function arrayDivide(array $values, $divisor){
    
    foreach ($values as $key=>$current){
        try {
            $values[$key] = divide($current, $divisor);
        } catch(RuntimeException $e){
            //$values[$key] = $current;
            //return $values[$key];
        }
        
    }
    return $values;
}