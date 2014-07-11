<?php
/**
 * 核心
 * 提供全局函数式参数
 *
 *
 * Auth: snake
 * Date: 14-7-10
 * Time: 上午11:44
 *
 */

namespace Snake;

/**
 * 调用函数
 * 传入参数1个
 *
 * @param $obj
 * @param callable $f
 * @return array
 * @throws \Exception
 */
function map($obj, callable $f)
{
    if (!is_callable($f)) {
        throw new \Exception("not found function", 1);
    }

    return array_map($f, $obj);
}

/**
 * 调用函数
 * 传入参数2个
 *
 * @param $obj
 * @param $obj2
 * @param callable $f
 * @return array
 * @throws \Exception
 */
function map_call_two($obj, $obj2, callable $f)
{
    if (!is_callable($f)) {
        throw new \Exception("not found function", 1);
    }

    return array_map($f, $obj, $obj2);
}

/**
 * 调用函数
 * 传入3个参数
 *
 * @param $obj
 * @param $obj2
 * @param $obj3
 * @param callable $f
 * @return array
 * @throws \Exception
 */
function map_call_three($obj, $obj2, $obj3, callable $f)
{
    if (!is_callable($f)) {
        throw new \Exception("not found function", 1);
    }

    return array_map($f, $obj, $obj2, $obj3);
}

/**
 * 调用函数
 * 传入数组
 *
 * @param array $objs 参数
 * @param callable $f 函数
 * @return array
 * @throws \Exception
 */
function map_call_array(array $objs, callable $f)
{
    if (!is_callable($f)) {
        throw new \Exception("not found function", 1);
    }

    if (!is_array($objs)) {
        throw new \Exception("param not array", 2);
    }

    $r = array();

    foreach ($objs as $obj) {
        array_push($r, call_user_func_array($f, $obj));
    }

    return $r;
}