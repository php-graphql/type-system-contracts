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
 * These types may be used as input types for arguments and directives.
 *
 * <code>
 *  export type GraphQLInputType =
 *      | GraphQLScalarType
 *      | GraphQLEnumType
 *      | GraphQLInputObjectType
 *      | GraphQLList<any>
 *      | GraphQLNonNull<
 *          | GraphQLScalarType
 *          | GraphQLEnumType
 *          | GraphQLInputObjectType
 *          | GraphQLList<any>
 *      >
 *  ;
 * </code>
 */
interface InputTypeInterface extends TypeInterface
{

}
