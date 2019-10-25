<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem\Type;

use GraphQL\Contracts\TypeSystem\DefinitionInterface;
use GraphQL\Contracts\TypeSystem\Common\DeprecationAwareInterface;

/**
 * These are all of the possible kinds of types.
 *
 * <code>
 *  export type GraphQLType =
 *      | GraphQLScalarType
 *      | GraphQLObjectType
 *      | GraphQLInterfaceType
 *      | GraphQLUnionType
 *      | GraphQLEnumType
 *      | GraphQLInputObjectType
 *      | GraphQLList<any>
 *      | GraphQLNonNull<any>
 *  ;
 * </code>
 */
interface TypeInterface extends DefinitionInterface
{

}
