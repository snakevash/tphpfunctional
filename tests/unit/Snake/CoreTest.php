<?php
/**
 *
 *
 *
 * Auth: snake
 * Date: 14-7-11
 * Time: 上午11:05
 *
 */

namespace Snake;


class CoreTest extends \PHPUnit_Framework_TestCase
{

    private $testParam1;
    private $testParam2;
    private $testParam3;

    protected function setUp()
    {
        $this->testParam1 = array(1, 2, 3, 4, 5);
        $this->testParam2 = array(new MyClass(11), new MyClass(22), new MyClass(33), new MyClass(44), new MyClass(55));
        $this->testParam3 = array(-5, -6, -7, -8, -9);
    }


    /**
     * @test
     */
    public function map_call_two()
    {
        $twice_c = function ($val, MyClass $val2) {
            return $val + $val2->getV();
        };

        $r = map_call_two($this->testParam1, $this->testParam2, $twice_c);
        $this->assertTrue(is_array($r) && count($r) == 5, '测试调用两个参数');
    }

    /**
     * @test
     */
    public function map_call_three()
    {
        $three = function ($v1, MyClass $v2, $v3) {
            return $v1 + $v2->getV() + $v3;
        };

        $r = map_call_three($this->testParam1, $this->testParam2, $this->testParam3, $three);
        $this->assertTrue(is_array($r) && count($r) == 5, '测试调用三个参数');
    }

    /**
     * @test
     */
    public function map_call_array()
    {
        $call_array = function ($v1, $v2, $v3, $v4, $v5) {
            return $v1 + $v2 + $v3 + $v4 + $v5;
        };

        $r = map_call_array(array($this->testParam1, $this->testParam3), $call_array);
        $this->assertTrue(is_array($r) && count($r) == 2, '测试调用数组参数');
    }
} 