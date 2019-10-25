<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem;

use GraphQL\Contracts\TypeSystem\Type\TypeInterface;
use GraphQL\Contracts\TypeSystem\Type\OutputTypeInterface;
use GraphQL\Contracts\TypeSystem\Common\TypeAwareInterface;
use GraphQL\Contracts\TypeSystem\Common\ArgumentsAwareInterface;
use GraphQL\Contracts\TypeSystem\Common\DeprecationAwareInterface;
use GraphQL\Contracts\TypeSystem\Common\DescriptionAwareInterface;

/**
 * This interface corresponds to the following reference implementation
 * except runtime and vendor-specific data.
 *
 * <code>
 *  export interface GraphQLField<
 *      TSource,
 *      TContext,
 *      TArgs = { [key: string]: any }
 *  > {
 *      name: string;
 *      description: Maybe<string>;
 *      type: GraphQLOutputType;
 *      args: GraphQLArgument[];
 *      resolve?: GraphQLFieldResolver<TSource, TContext, TArgs>;
 *      subscribe?: GraphQLFieldResolver<TSource, TContext, TArgs>;
 *      isDeprecated?: boolean;
 *      deprecationReason?: Maybe<string>;
 *      extensions: Maybe<Readonly<Record<string, any>>>;
 *      astNode?: Maybe<FieldDefinitionNode>;
 *  }
 * </code>
 *
 * @method OutputTypeInterface getType()
 */
interface FieldInterface extends
    DefinitionInterface,
    DescriptionAwareInterface,
    DeprecationAwareInterface,
    TypeAwareInterface,
    ArgumentsAwareInterface
{
}
