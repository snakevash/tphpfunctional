<?php
/**
 *
 *
 *
 * Auth: snake
 * Date: 14-7-9
 * Time: 下午2:04
 *
 */

namespace Snake;


class FlattenTest extends AbstractTestCase
{
    public function setUp()
    {
        //parent::setUp();
        $this->goodArray = array(1, 2, 3, array(
            4, 5, 6, array(7, 8, 9)
        ), 10, array(11, array(12, 13), 14), 15);
        $this->goodArray2 = array(1 => 1, 'foo' => '2', 3 => '3', array('foo' => 5));
        $this->goodIterator = new \ArrayIterator($this->goodArray);
        $this->goodIterator[3] = new \ArrayIterator($this->goodIterator[3]);
        $this->goodIterator[5][1] = new \ArrayIterator($this->goodIterator[5][1]);
    }

    /**
     * @test
     */
    public function test()
    {
        $t = \Functional\flatten($this->goodArray);
        $this->assertSame(range(1, 15), $t);
        $t1 = \Functional\flatten($this->goodIterator);
        $this->assertSame(range(1, 15), $t1);
        $t2 = \Functional\flatten($this->goodArray2);
        $this->assertSame(array(1, '2', '3', 5), $t2);
        $t3 = \Functional\flatten(array(array(new \stdClass())));
        $this->assertEquals(array(new \stdClass()), $t3);
    }

    public function passNoColletion()
    {
        $this->expectArgumentError('Functional\flatten() expects parameter 1 to be array or instance of Traversable');
        \Functional\flatten('invalidCollection');
    }
}