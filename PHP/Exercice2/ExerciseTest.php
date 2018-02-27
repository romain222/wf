<?php
use PHPUnit\Framework\TestCase;

class ExerciseTest extends TestCase
{
    public function testSalting()
    {
        $password = 'azertyqwert';
        $salt = 'salt';
        
        require 'exercise.php';
        
        $this->assertEquals('azertysaltqwert', $saltedPassword);
    }
}

