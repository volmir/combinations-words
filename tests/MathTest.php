<?php

use PHPUnit\Framework\TestCase;

final class MathTest extends TestCase
{
    
    public function testFactorial()
    {
        $this->assertEquals(1, App\Helpers\Math::factorial(1));        
        $this->assertEquals(2, App\Helpers\Math::factorial(2));        
        $this->assertEquals(6, App\Helpers\Math::factorial(3));        
        $this->assertEquals(24, App\Helpers\Math::factorial(4));        
        $this->assertEquals(120, App\Helpers\Math::factorial(5));        
        $this->assertNotEquals(0, App\Helpers\Math::factorial(5));        
    }    
}