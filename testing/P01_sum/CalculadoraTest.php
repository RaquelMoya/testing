<?php

use PHPUnit\Framework\TestCase;

require_once('Calculadora.php');

final class CalculadoraTest extends TestCase
{
    public function testSuma()
    {
        $calc = new Calculadora();
        $this->assertSame(4, $calc->suma(2, 2));
    }

    public function testSuma2()
    {
        $calc = new Calculadora();
        $this->assertSame(16, $calc->suma(4, 12));
    }

    public function testSuma3()
    {
        $calc = new Calculadora();
        
        $this->assertSame(8, $calc->suma(4, 3));
    }
}
?>