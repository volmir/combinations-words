<?php

use PHPUnit\Framework\TestCase;

final class MultibyteTest extends TestCase
{
    
    public function teststringToArray()
    {
        $this->assertEquals(['м','а','м','а'], App\Helpers\Multibyte::stringToArray('мама'));        
        $this->assertNotEquals(['р','а','м','а'], App\Helpers\Multibyte::stringToArray('мама'));        
    }    
}