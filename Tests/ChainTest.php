<?php

/**
 * _Chain_ ©2015 Julien <youlweb@hotmail.com>
 * Refer to the LICENSE file for the full copyright and license information.
 * @package _chain_
 */

namespace _Chain_;

/**
 * @author Julien Tord <youlweb@hotmail.com>
 */
class ChainTest extends \PHPUnit_Framework_TestCase
{
    public function test_LinkAndLinks()
    {
        $_chain_ = new Chain();
        $_link_1 = $this->mockLink('first');
        $_link_2 = $this->mockLink('second');
        $_chain_->_link($_link_1)->_link($_link_2);
        $this->assertEquals([$_link_1, $_link_2], $_chain_->links());
    }

    public function testLink_()
    {
        $_chain_ = new Chain();
        $_link_1 = $this->mockLink('first');
        $_link_2 = $this->mockLink('second');
        $_chain_->link_($_link_1)->link_($_link_2);
        $this->assertEquals([$_link_2, $_link_1], $_chain_->links());
    }

    /**
     * @param string $name
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function mockLink($name)
    {
        return $this->getMock('_Chain_\_Link_', [], [], $name);
    }
}
