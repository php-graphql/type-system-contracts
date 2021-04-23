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
 * Object Type Definition
 *
 * Almost all of the GraphQL types you define will be object types. Object types
 * have a name, but most importantly describe their fields.
 *
 * This interface corresponds to the following reference implementation
 * except runtime and vendor-specific data.
 *
 * <code>
 *  export class GraphQLObjectType<TSource = any, TContext = any> {
 *      name: string;
 *      description: Maybe<string>;
 *      isTypeOf: Maybe<GraphQLIsTypeOfFn<TSource, TContext>>;
 *      extensions: Maybe<Readonly<GraphQLObjectTypeExtensions<TSource, TContext>>>;
 *      astNode: Maybe<ObjectTypeDefinitionNode>;
 *      extensionASTNodes: ReadonlyArray<ObjectTypeExtensionNode>;
 *
 *      constructor(config: Readonly<GraphQLObjectTypeConfig<TSource, TContext>>);
 *
 *      getFields(): GraphQLFieldMap<any, TContext>;
 *      getInterfaces(): Array<GraphQLInterfaceType>;
 *
 *      toConfig(): GraphQLObjectTypeConfig<any, any> & {
 *          interfaces: Array<GraphQLInterfaceType>;
 *          fields: GraphQLFieldConfigMap<any, any>;
 *          extensions: Maybe<Readonly<GraphQLObjectTypeExtensions<TSource, TContext>>>;
 *          extensionASTNodes: ReadonlyArray<ObjectTypeExtensionNode>;
 *      };
 *
 *      toString(): string;
 *      toJSON(): string;
 *      inspect(): string;
 *      get [Symbol.toStringTag](): string;
 *  }
 * </code>
 */
interface ObjectTypeInterface extends
    NamedTypeInterface,
    CompositeTypeInterface,
    NullableTypeInterface,
    OutputTypeInterface,
    FieldsAwareInterface,
    InterfacesAwareInterface
{

}
