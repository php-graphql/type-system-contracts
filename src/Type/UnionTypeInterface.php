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
 * Union Type Definition
 *
 * When a field can return one of a heterogeneous set of types, a Union type
 * is used to describe what types are possible as well as providing a function
 * to determine which type is actually used when the field is resolved.
 *
 * <code>
 *  export class GraphQLUnionType {
 *      name: string;
 *      description: Maybe<string>;
 *      resolveType: Maybe<GraphQLTypeResolver<any, any>>;
 *      extensions: Maybe<Readonly<GraphQLUnionTypeExtensions>>;
 *      astNode: Maybe<UnionTypeDefinitionNode>;
 *      extensionASTNodes: ReadonlyArray<UnionTypeExtensionNode>;
 *
 *      constructor(config: Readonly<GraphQLUnionTypeConfig<any, any>>);
 *      getTypes(): Array<GraphQLObjectType>;
 *
 *      toConfig(): GraphQLUnionTypeConfig<any, any> & {
 *          types: Array<GraphQLObjectType>;
 *          extensions: Maybe<Readonly<GraphQLUnionTypeExtensions>>;
 *          extensionASTNodes: ReadonlyArray<UnionTypeExtensionNode>;
 *      };
 *
 *      toString(): string;
 *      toJSON(): string;
 *      inspect(): string;
 *      get [Symbol.toStringTag](): string;
 *  }
 * </code>
 */
interface UnionTypeInterface extends
    NamedTypeInterface,
    AbstractTypeInterface,
    CompositeTypeInterface,
    NullableTypeInterface,
    OutputTypeInterface
{
    /**
     * @param string $name
     * @return ObjectTypeInterface
     */
    public function getType(string $name): ?ObjectTypeInterface;

    /**
     * @param string $name
     * @return bool
     */
    public function hasType(string $name): bool;

    /**
     * @return iterable<string, ObjectTypeInterface>
     */
    public function getTypes(): iterable;
}
