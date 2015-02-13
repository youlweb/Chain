<?php

/**
 * Chain ©2015 Julien Tord <youlweb@hotmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Jul\Chain;

use Jul\Chain\Exception\LinkExceptionInterface;

/**
 * Link
 *
 * Updates a visiting I/O object via an operation.
 *
 * @author Julien Tord <youlweb@hotmail.com>
 */
interface LinkInterface
{
    /**
     * Performs an operation on a visiting I/O object.
     *
     * @param I_O $I_O
     * @return I_O
     */
    public function exec(I_O $I_O);
}