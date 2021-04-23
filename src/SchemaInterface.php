<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem;

use GraphQL\Contracts\TypeSystem\Common\DescriptionAwareInterface;
use GraphQL\Contracts\TypeSystem\Type\CompositeTypeInterface;
use GraphQL\Contracts\TypeSystem\Type\InterfaceTypeInterface;
use GraphQL\Contracts\TypeSystem\Type\NamedTypeInterface;
use GraphQL\Contracts\TypeSystem\Type\ObjectTypeInterface;
use GraphQL\Contracts\TypeSystem\Type\AbstractTypeInterface;

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
 *      description: Maybe<string>;
 *      extensions: Maybe<Readonly<GraphQLSchemaExtensions>>;
 *      astNode: Maybe<SchemaDefinitionNode>;
 *      extensionASTNodes: ReadonlyArray<SchemaExtensionNode>;
 *
 *      constructor(config: Readonly<GraphQLSchemaConfig>);
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
 *      getImplementations(
 *          interfaceType: GraphQLInterfaceType,
 *      ): InterfaceImplementations;
 *
 *      isSubType(
 *          abstractType: GraphQLAbstractType,
 *          maybeSubType: GraphQLObjectType | GraphQLInterfaceType,
 *      ): boolean;
 *
 *      getDirectives(): ReadonlyArray<GraphQLDirective>;
 *      getDirective(name: string): Maybe<GraphQLDirective>;
 *
 *      toConfig(): GraphQLSchemaConfig & {
 *          types: Array<GraphQLNamedType>;
 *          directives: Array<GraphQLDirective>;
 *          extensions: Maybe<Readonly<GraphQLSchemaExtensions>>;
 *          extensionASTNodes: ReadonlyArray<SchemaExtensionNode>;
 *          assumeValid: boolean;
 *      };
 *      get [Symbol.toStringTag](): string;
 * }
 * </code>
 */
interface SchemaInterface extends
    DefinitionInterface,
    DescriptionAwareInterface
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
     * @return iterable<string, NamedTypeInterface>
     */
    public function getTypeMap(): iterable;

    /**
     * @param string $name
     * @return NamedTypeInterface|null
     */
    public function getType(string $name): ?NamedTypeInterface;

    /**
     * @param AbstractTypeInterface $type
     * @return iterable<string, ObjectTypeInterface>
     */
    public function getPossibleTypes(AbstractTypeInterface $type): iterable;

    /**
     * @param InterfaceTypeInterface $type
     * @return iterable<ObjectTypeInterface|InterfaceTypeInterface>
     */
    public function getImplementations(InterfaceTypeInterface $type): iterable;

    /**
     * @param AbstractTypeInterface $type
     * @param ObjectTypeInterface|InterfaceTypeInterface $subtype
     * @return bool
     */
    public function isSubType(AbstractTypeInterface $type, CompositeTypeInterface $subtype): bool;

    /**
     * @deprecated Please use {@see SchemaInterface::getPossibleTypes()} instead.
     * @param AbstractTypeInterface $haystack
     * @param ObjectTypeInterface $needle
     * @return bool
     */
    public function isPossibleType(AbstractTypeInterface $haystack, ObjectTypeInterface $needle): bool;

    /**
     * @return iterable<string, DirectiveInterface>
     */
    public function getDirectives(): iterable;

    /**
     * @param string $name
     * @return DirectiveInterface|null
     */
    public function getDirective(string $name): ?DirectiveInterface;
}
