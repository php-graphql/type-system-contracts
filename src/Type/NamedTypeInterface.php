<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem\Type;

use GraphQL\Contracts\TypeSystem\Common\NameAwareInterface;
use GraphQL\Contracts\TypeSystem\Common\DescriptionAwareInterface;

/**
 * These named types do not include modifiers like List or NonNull.
 *
 * <code>
 *  export type GraphQLNamedType =
 *      | GraphQLScalarType
 *      | GraphQLObjectType
 *      | GraphQLInterfaceType
 *      | GraphQLUnionType
 *      | GraphQLEnumType
 *      | GraphQLInputObjectType
 *  ;
 * </code>
 */
interface NamedTypeInterface extends
    TypeInterface,
    NameAwareInterface,
    DescriptionAwareInterface
{

}
