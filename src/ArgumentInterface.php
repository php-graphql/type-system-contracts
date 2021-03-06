<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem;

use GraphQL\Contracts\TypeSystem\Common\DeprecationAwareInterface;
use GraphQL\Contracts\TypeSystem\Type\InputTypeInterface;
use GraphQL\Contracts\TypeSystem\Common\TypeAwareInterface;
use GraphQL\Contracts\TypeSystem\Common\NameAwareInterface;
use GraphQL\Contracts\TypeSystem\Common\DescriptionAwareInterface;
use GraphQL\Contracts\TypeSystem\Common\DefaultValueAwareInterface;

/**
 * This interface corresponds to the following reference implementation
 * except runtime and vendor-specific data.
 *
 * <code>
 *  export interface GraphQLArgument {
 *      name: string;
 *      description: Maybe<string>;
 *      type: GraphQLInputType;
 *      defaultValue: unknown;
 *      deprecationReason: Maybe<string>;
 *      extensions: Maybe<Readonly<GraphQLArgumentExtensions>>;
 *      astNode: Maybe<InputValueDefinitionNode>;
 *  }
 * </code>
 *
 * @method InputTypeInterface getType()
 * @template-implements TypeAwareInterface<InputTypeInterface>
 */
interface ArgumentInterface extends
    DefinitionInterface,
    NameAwareInterface,
    DescriptionAwareInterface,
    TypeAwareInterface,
    DefaultValueAwareInterface,
    DeprecationAwareInterface
{

}
