<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem;

use GraphQL\Contracts\TypeSystem\Type\ObjectTypeInterface;
use GraphQL\Contracts\TypeSystem\Type\InterfaceTypeInterface;
use GraphQL\Contracts\TypeSystem\Type\NamedTypeInterface;
use GraphQL\Contracts\TypeSystem\Type\AbstractTypeInterface;
use GraphQL\Contracts\TypeSystem\Schema\InterfaceImplementationsInterface;

/**
 * Schema Definition
 *
 * A Schema is created by supplying the root types of each type of operation,
 * query and mutation (optional). A schema definition is then supplied to the
 * validator and executor.
 *
 * This interface corresponds to the following reference implementation
 * except runtime and vendor-specific data.
 *
 * <code>
 *  export class GraphQLSchema {
 *      extensions: Maybe<Readonly<Record<string, any>>>;
 *      astNode: Maybe<SchemaDefinitionNode>;
 *      extensionASTNodes: Maybe<ReadonlyArray<SchemaExtensionNode>>;
 *
 *      constructor(config: GraphQLSchemaConfig);
 *      getQueryType(): Maybe<GraphQLObjectType>;
 *      getMutationType(): Maybe<GraphQLObjectType>;
 *      getSubscriptionType(): Maybe<GraphQLObjectType>;
 *      getTypeMap(): TypeMap;
 *      getType(name: string): Maybe<GraphQLNamedType>;
 *
 *      getPossibleTypes(
 *          abstractType: GraphQLAbstractType,
 *      ): ReadonlyArray<GraphQLObjectType>;
 *
 *      isPossibleType(
 *          abstractType: GraphQLAbstractType,
 *          possibleType: GraphQLObjectType,
 *      ): boolean;
 *
 *      getDirectives(): ReadonlyArray<GraphQLDirective>;
 *      getDirective(name: string): Maybe<GraphQLDirective>;
 * }
 * </code>
 */
interface SchemaInterface extends DefinitionInterface
{
    /**
     * @return ObjectTypeInterface|null
     */
    public function getQueryType(): ?ObjectTypeInterface;

    /**
     * @return ObjectTypeInterface|null
     */
    public function getMutationType(): ?ObjectTypeInterface;

    /**
     * @return ObjectTypeInterface|null
     */
    public function getSubscriptionType(): ?ObjectTypeInterface;

    /**
     * @psalm-return iterable<string, NamedTypeInterface>
     * @return iterable|NamedTypeInterface[]
     */
    public function getTypeMap(): iterable;

    /**
     * @param string $name
     * @return NamedTypeInterface|null
     */
    public function getType(string $name): ?NamedTypeInterface;

    /**
     * @param AbstractTypeInterface $type
     * @psalm-return iterable<string, ObjectTypeInterface>
     * @return iterable|ObjectTypeInterface[]
     */
    public function getPossibleTypes(AbstractTypeInterface $type): iterable;

    /**
     * @param AbstractTypeInterface $haystack
     * @param ObjectTypeInterface $needle
     * @return bool
     */
    public function isPossibleType(AbstractTypeInterface $haystack, ObjectTypeInterface $needle): bool;

    /**
     * @psalm-return iterable<string, DirectiveInterface>
     * @return iterable|DirectiveInterface[]
     */
    public function getDirectives(): iterable;

    /**
     * @param string $name
     * @return DirectiveInterface|null
     */
    public function getDirective(string $name): ?DirectiveInterface;
}
