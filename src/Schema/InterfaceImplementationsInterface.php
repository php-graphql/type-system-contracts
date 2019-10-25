<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem\Schema;

use GraphQL\Contracts\TypeSystem\Type\ObjectTypeInterface;
use GraphQL\Contracts\TypeSystem\Type\InterfaceTypeInterface;

/**
 * This interface corresponds to the following reference implementation
 * except runtime and vendor-specific data.
 *
 * <code>
 *  type InterfaceImplementations = {
 *      objects: ReadonlyArray<GraphQLObjectType>;
 *      interfaces: ReadonlyArray<GraphQLInterfaceType>;
 *  };
 * </code>
 */
interface InterfaceImplementationsInterface
{
    /**
     * @return iterable|ObjectTypeInterface[]
     */
    public function getObjects(): iterable;

    /**
     * @return iterable|InterfaceTypeInterface[]
     */
    public function getInterfaces(): iterable;
}
