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
 *  export class GraphQLObjectType<
 *      TSource = any,
 *      TContext = any,
 *      TArgs = { [key: string]: any }
 *  > {
 *      name: string;
 *      description: Maybe<string>;
 *      isTypeOf: Maybe<GraphQLIsTypeOfFn<TSource, TContext>>;
 *      extensions: Maybe<Readonly<Record<string, any>>>;
 *      astNode: Maybe<ObjectTypeDefinitionNode>;
 *      extensionASTNodes: Maybe<ReadonlyArray<ObjectTypeExtensionNode>>;
 *
 *      constructor(config: GraphQLObjectTypeConfig<TSource, TContext, TArgs>);
 *      getFields(): GraphQLFieldMap<any, TContext, TArgs>;
 *      getInterfaces(): GraphQLInterfaceType[];
 *
 *      toConfig(): GraphQLObjectTypeConfig<any, any> & {
 *          interfaces: GraphQLInterfaceType[];
 *          fields: GraphQLFieldConfigMap<any, any>;
 *          extensions: Maybe<Readonly<Record<string, any>>>;
 *          extensionASTNodes: ReadonlyArray<ObjectTypeExtensionNode>;
 *      };
 *
 *      toString(): string;
 *      toJSON(): string;
 *      inspect(): string;
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
