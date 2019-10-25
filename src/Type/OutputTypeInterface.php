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
 * These types may be used as output types as the result of fields.
 *
 * <code>
 *  export type GraphQLOutputType =
 *      | GraphQLScalarType
 *      | GraphQLObjectType
 *      | GraphQLInterfaceType
 *      | GraphQLUnionType
 *      | GraphQLEnumType
 *      | GraphQLList<any>
 *      | GraphQLNonNull<
 *          | GraphQLScalarType
 *          | GraphQLObjectType
 *          | GraphQLInterfaceType
 *          | GraphQLUnionType
 *          | GraphQLEnumType
 *          | GraphQLList<any>
 *      >
 *  ;
 * </code>
 */
interface OutputTypeInterface extends TypeInterface
{
}
