<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem;

use GraphQL\Contracts\TypeSystem\Common\NameAwareInterface;
use GraphQL\Contracts\TypeSystem\Common\DeprecationAwareInterface;
use GraphQL\Contracts\TypeSystem\Common\DescriptionAwareInterface;

/**
 * GraphQL Enum types, like scalar types, also represent leaf values in a
 * GraphQL type system. However Enum types describe the set of possible values.
 *
 * This interface corresponds to the following reference implementation
 * except runtime and vendor-specific data.
 *
 * <code>
 *  export interface GraphQLEnumValue {
 *      name: string;
 *      description: Maybe<string>;
 *      value: any;
 *      deprecationReason: Maybe<string>;
 *      extensions: Maybe<Readonly<GraphQLEnumValueExtensions>>;
 *      astNode?: Maybe<EnumValueDefinitionNode>;
 *  }
 * </code>
 */
interface EnumValueInterface extends
    DefinitionInterface,
    NameAwareInterface,
    DescriptionAwareInterface,
    DeprecationAwareInterface
{
    /**
     * @return mixed
     */
    public function getValue();
}
