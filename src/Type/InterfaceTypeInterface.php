<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem\Type;

use GraphQL\Contracts\TypeSystem\Common\FieldsAwareInterface;
use GraphQL\Contracts\TypeSystem\Common\InterfacesAwareInterface;

/**
 * Interface Type Definition
 *
 * When a field can return one of a heterogeneous set of types, a Interface type
 * is used to describe what types are possible, what fields are in common across
 * all types, as well as a function to determine which type is actually used
 * when the field is resolved.
 *
 * This interface corresponds to the following reference implementation
 * except runtime and vendor-specific data.
 *
 * <code>
 *  export class GraphQLInterfaceType {
 *      name: string;
 *      description: Maybe<string>;
 *      resolveType: Maybe<GraphQLTypeResolver<any, any>>;
 *      extensions: Maybe<Readonly<GraphQLInterfaceTypeExtensions>>;
 *      astNode?: Maybe<InterfaceTypeDefinitionNode>;
 *      extensionASTNodes: ReadonlyArray<InterfaceTypeExtensionNode>;
 *
 *      constructor(config: Readonly<GraphQLInterfaceTypeConfig<any, any>>);
 *      getFields(): GraphQLFieldMap<any, any>;
 *      getInterfaces(): Array<GraphQLInterfaceType>;
 *
 *      toConfig(): GraphQLInterfaceTypeConfig<any, any> & {
 *          interfaces: Array<GraphQLInterfaceType>;
 *          fields: GraphQLFieldConfigMap<any, any>;
 *          extensions: Maybe<Readonly<GraphQLInterfaceTypeExtensions>>;
 *          extensionASTNodes: ReadonlyArray<InterfaceTypeExtensionNode>;
 *      };
 *
 *      toString(): string;
 *      toJSON(): string;
 *      inspect(): string;
 *      get [Symbol.toStringTag](): string;
 *  }
 * </code>
 */
interface InterfaceTypeInterface extends
    NamedTypeInterface,
    AbstractTypeInterface,
    CompositeTypeInterface,
    NullableTypeInterface,
    OutputTypeInterface,
    FieldsAwareInterface,
    InterfacesAwareInterface
{

}
