<?php

/**
 * _Chain_ ©2015 Julien <youlweb@hotmail.com>
 * Refer to the LICENSE file for the full copyright and license information.
 * @package chain/chain
 */

namespace _Chain_;
use _Chain_\Exception\TypeException;

/**
 * Enforce type safety between links.
 *
 * _Chain_ uses type constants for primitive types, and FQCN strings to represent
 * objects. Note that closures are cast as 'Closure' objects in PHP.
 *
 * @author Julien Tord <youlweb@hotmail.com>
 */
interface Type
{
    const BOOL = 1;
    const MULTI = 2;
    const NULL = 3;
    const NUMBER = 4;
    const RESOURCE = 5;
    const STRING = 6;

    /**
     * Checks if two types are compatible.
     *
     * Type validity is not enforced to enhance performance, however
     * mismatching FQCNs can return TRUE if $actual extends, or
     * implements $expected.
     *
     * @param int|string $expected Type constant or FQCN.
     * @param int|string $actual Type constant or FQCN.
     * @return bool
     */
    public static function isCompatible($expected, $actual);

    /**
     * Checks the validity of a type constant or FQCN.
     *
     * @param int|string $type Type constant or FQCN.
     * @return bool
     */
    public static function isValid($type);

    /**
     * Converts a type constant or FQCN to a literal type.
     *
     * @param int|string $type Type constant or FQCN.
     * @return string Literal type.
     * @throws TypeException A type constant or FQCN is not recognized.
     */
    public static function literal($type);

    /**
     * Returns a type constant or the FQCN.
     *
     * Note that closures are cast as 'Closure' objects in PHP.
     *
     * @param mixed $value Primitive or object to evaluate.
     * @return int|string Type constant or FQCN.
     */
    public static function typeOf($value);
}