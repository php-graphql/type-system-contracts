<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem;

/**
 * Tagging interface for GraphQL definitions (schema, types, directive, etc.).
 *
 * Note: Implementing the `\JsonSerializable` interface is an alternative to
 * the `toJSON()` method, which is defined in the reference JS implementation.
 */
interface DefinitionInterface extends \JsonSerializable
{
    /**
     * An alternative to the `toString()` and `inspect()` methods, which is
     * described in the reference implementation.
     *
     * @return string
     */
    public function __toString(): string;
}
