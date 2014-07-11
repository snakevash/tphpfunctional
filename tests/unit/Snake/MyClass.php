<?php
/**
 *
 *
 *
 * Auth: snake
 * Date: 14-7-11
 * Time: 上午11:09
 *
 */

namespace Snake;


class MyClass
{

    private $v;

    function __construct($v)
    {
        $this->v = $v;
    }

    /**
     * @param mixed $v
     */
    public function setV($v)
    {
        $this->v = $v;
    }

    /**
     * @return mixed
     */
    public function getV()
    {
        return $this->v;
    }

    /**
     * @test
     */
    public function test()
    {

    }
}