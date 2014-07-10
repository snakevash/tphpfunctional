<?php
/**
 *
 *
 *
 * Auth: snake
 * Date: 14-7-9
 * Time: 下午3:52
 *
 */

namespace Snake;


class Functional
{

    private $values;

    function __construct(array $values)
    {
        $this->values = $values;
    }

    /**
     * 回调函数遍历执行
     *
     * @param callable $f
     * @return $this
     * @throws \Exception
     */
    public function map(callable $f)
    {
        $this->values = map($this->values, $f);
        return $this;
    }
}