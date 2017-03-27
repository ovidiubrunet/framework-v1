<?php
/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 27.03.2017
 * Time: 12:02
 */

namespace tests\library\framework;


use framework\ArrayMethods;
use PHPUnit\Framework\TestCase;

class ArrayMethodsTest extends TestCase
{
    public function testCleanMethod(){
        $array = ["masina", "copac", "", "mancare "];
        $this->assertNotEmpty(ArrayMethods::clean($array));
        $this->assertEquals(3, count(ArrayMethods::clean($array)));
        $this->assertEmpty(ArrayMethods::clean($array));
    }

    public function testTrimMethod(){
        $array = ["masina", "copac", "", "mancare "];
        $this->assertTrue(in_array("mancare",ArrayMethods::trim($array)));
    }
}