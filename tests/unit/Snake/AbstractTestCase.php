<?php
/**
 *
 *
 *
 * Auth: snake
 * Date: 14-7-8
 * Time: 下午4:43
 *
 */

namespace Snake;

use Functional as F;

class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * 过滤掉没有的方法
     */
    public function setUp()
    {
        $functions = func_num_args() > 0 ?
            func_get_arg(0) : array(ucfirst(strtolower(str_replace('Test', '', get_class($this)))));

        foreach (F\flatten($functions) as $function) {
            if (!function_exists($function)) {
                $this->markTestSkipped(
                    sprintf(
                        'Function "%s()" not implemented in %s version',
                        $function,
                        extension_loaded('functional') ? 'native C' : 'PHP userland'
                    )
                );
                break;
            }
        }
    }

    /**
     * 一个包装的断言方法
     *
     * @param $msg
     */
    public function expectArgumentError($msg)
    {
        if (extension_loaded('functional')) {
            $this->setExpectedException('PHPUnit_Framework_Error_Warning', $msg);
        } else {
            $this->setExpectedException('Functional\Exceptions\InvalidArgumentException', $msg);
        }
    }

    public function exception()
    {
        if(func_num_args() < 3){
            throw new \DomainException('Callback exception');
        }

        $args = func_get_args();
        $this->assertGreaterThanOrEqual(3,count($args));
        throw new \DomainException(sprintf('Callback exception: %s',$args[1]));
    }
} 