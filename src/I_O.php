<?php

/**
 * _Chain_ ©2015 Julien <youlweb@hotmail.com>
 * Refer to the LICENSE file for the full copyright and license information.
 * @package chain/core
 */

namespace _Chain_;
use _Chain_\Exception\I_O_Exception;

/**
 * Input/Output interface.
 *
 * Carries the result of link operations through the chain. The state of this
 * visitor object is altered by each link it traverses.
 *
 * @author Julien <youlweb@hotmail.com>
 */
interface I_O
{
    /**
     * Successively returns each internal value as an input argument.
     *
     * @param int $type A type constant or FQCN string.
     * @param bool $optional Signal an optional argument.
     * @return mixed An input value.
     * @throws I_O_Exception If a mandatory argument is missing, or the
     * request type is unexpected.
     */
    public function I_($type, $optional = false);

    /**
     * Updates the internal values and returns itself.
     *
     * The internal value pointer is reset to point at the first value.
     *
     * @param mixed $value
     * @param mixed $value,... More output values.
     * @return self
     */
    public function _O($value);

    /**
     * Bypass type checking for a performance uptick.
     *
     * When you are using chains in a tested production environment only.
     * Defaults to FALSE.
     *
     * @param bool $prod
     * @return self
     */
    public function prod($prod);
}