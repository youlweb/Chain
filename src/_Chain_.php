<?php

/**
 * _Chain_ ©2015 Julien <youlweb@hotmail.com>
 * Refer to the LICENSE file for the full copyright and license information.
 * @package chain/core
 */

namespace _Chain_;

/**
 * A chain is a collection of links.
 *
 * An Input/Output visitor is passed through each link to update its state.
 * A chain is also a link, allowing it to be inserted in other chains.
 *
 * @author Julien <youlweb@hotmail.com>
 */
interface _Chain_ extends _Link_
{
    /**
     * Appends a link to the chain.
     *
     * @param _Link_ $link
     * @return self
     */
    public function _ADD(_Link_ $link);

    /**
     * Prepends a link to the chain.
     *
     * @param _Link_ $link
     * @return self
     */
    public function ADD_(_Link_ $link);

    /**
     * Returns all links in the chain.
     *
     * @return _Link_[]
     */
    public function ALL();
}