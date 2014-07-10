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

function map($obj, callable $f)
{
    if (!function_exists($f)) {
        throw new \Exception("not found function", 1);
    }

    return array_map($f, $obj);
}

function map_call_two(array $obj, array $obj2, callable $f)
{
    if (!function_exists($f)) {
        throw new \Exception("not found function", 1);
    }

    if (!is_array($obj) || !is_array($obj2)) {
        throw new \Exception("param not array", 2);
    }

    return array_map($f, $obj, $obj2);
}

function map_call_three(array $obj, array $obj2, array $obj3, callable $f)
{
    if (!function_exists($f)) {
        throw new \Exception("not found function", 1);
    }

    if (!is_array($obj) || !is_array($obj2) || !is_array($obj3)) {
        throw new \Exception("param not array", 2);
    }

    return array_map($f, $obj, $obj2, $obj3);
}