<?php
/**
 *
 *
 *
 * Auth: snake
 * Date: 14-7-9
 * Time: 下午4:06
 *
 */

namespace Snake;


class FuncionalTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function map()
    {
        $t = array(1, 2, 3, 4, 5);
        $t2 = array(6, 7, 8, 9, 10);

        $r = array_map("twice", $t);
        $r2 = array_map("twice", $t2);
        $r3 = array_map("twiceAdd", $t, $t2);
        $r4 = array_map("twice", array_map("twiceAdd", $t, $t2));

        $sf = new Functional($t);
        $sf->map("twice")->map("twice");

        $this->assertTrue(true, "测试");

    }

    /**
     * @test
     */
    public function reflectFunction()
    {
        $m = new \ReflectionFunction('array_map');

    }
}