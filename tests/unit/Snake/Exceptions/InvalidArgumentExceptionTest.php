<?php
/**
 * 
 * 
 * 
 * Auth: snake
 * Date: 14-7-8
 * Time: 下午3:42
 * 
 */
namespace Snake\Exceptions;

use \Functional\Exceptions\InvalidArgumentException;

class InvalidArgumentExceptionTest extends \PHPUnit_Framework_TestCase {
    /**
     * @test
     */
    public function CallbackExceptionWithUndefinedStaticMethod()
    {
        $this->setExpectedException(
            'Functional\Exceptions\InvalidArgumentException',
            "func() expects parameter 1 to be a valid callback, method 'stdClass::method' not found or invalid method name"
        );

        InvalidArgumentException::assertCallback(array('stdClass','method'),'func',1);
    }
} 