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