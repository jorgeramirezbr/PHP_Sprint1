<?php
use PHPUnit\Framework\TestCase;
include 'src/NumberChecker.php';

class NumberCheckerTest extends TestCase {
    
    public function testIsEven() {
        $numberChecker = new NumberChecker(10);

        $this->assertIsBool($numberChecker->isEven());
        $this->assertTrue($numberChecker->isEven());
    }

    public function testIsPositive() {
        $numberChecker = new NumberChecker(-10);

        $this->assertIsBool($numberChecker->isPositive());
        $this->assertFalse($numberChecker->isPositive());
    }
}


?>