<?php
use PHPUnit\Framework\TestCase;
require_once 'class/Complex.php';

class ComplexTest extends TestCase
{
    private $additional_tests = [
        [[1, 2], [3, 4], [4, 6]],
        [[10, 20], [30, 35], [40, 55]]
    ];

    private $subtraction_tests = [
        [[1, 2], [3, 4], [-2, -2]],
        [[10, 20], [30, 35], [-20, -15]]
    ];

    private $multiplication_tests = [
        [[1, 2], [3, 4], [-5, 10]],
        [[10, 20], [30, 35], [-400, 950]]
    ];

    private $deletion_tests = [
        [[1, 2], [3, 4], [0.44, 0.08]],
        [[1, 5], [6, 8], [0.46, 0.22]]
    ];

    public function testAddition()
    {
        foreach ($this->additional_tests as $test) {
            $z1 = null;
            $z2 = null;
            $z3 = null;
            foreach ($test as $k=>$example){
                $k++;
                $complex = "z".$k;
                list($const, $multiplier) = $example;
                $$complex = new Complex($const, $multiplier);
                if ($z1&&$z2&&$z3) {
                    $this->assertEquals($z3, Complex::addition($z1, $z2));
                }
            }
        }
    }

    public function testSubtraction()
    {
        foreach ($this->subtraction_tests as $test) {
            $z1 = null;
            $z2 = null;
            $z3 = null;
            foreach ($test as $k=>$example){
                $k++;
                $complex = "z".$k;
                list($const, $multiplier) = $example;
                $$complex = new Complex($const, $multiplier);
                if ($z1&&$z2&&$z3) {
                    $this->assertEquals($z3, Complex::subtraction($z1, $z2));
                }
            }
        }
    }

    public function testMultiplication()
    {
        foreach ($this->multiplication_tests as $test) {
            $z1 = null;
            $z2 = null;
            $z3 = null;
            foreach ($test as $k=>$example){
                $k++;
                $complex = "z".$k;
                list($const, $multiplier) = $example;
                $$complex = new Complex($const, $multiplier);
                if ($z1&&$z2&&$z3) {
                    $this->assertEquals($z3, Complex::multiplication($z1, $z2));
                }
            }
        }
    }

    public function testDeletion()
    {
        foreach ($this->deletion_tests as $test) {
            $z1 = null;
            $z2 = null;
            $z3 = null;
            foreach ($test as $k=>$example){
                $k++;
                $complex = "z".$k;
                list($const, $multiplier) = $example;
                $$complex = new Complex($const, $multiplier);
                if ($z1&&$z2&&$z3) {
                    $this->assertEquals($z3, Complex::deletion($z1, $z2));
                }
            }
        }
    }
}