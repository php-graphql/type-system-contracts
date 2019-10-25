<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem\Type;

/**
 * These types may describe types which may be leaf values.
 *
 * <code>
 *  export type GraphQLLeafType =
 *      | GraphQLScalarType
 *      | GraphQLEnumType
 *  ;
 * </code>
 */
interface LeafTypeInterface extends TypeInterface
{
}
