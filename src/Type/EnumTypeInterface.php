<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem\Type;

use GraphQL\Contracts\TypeSystem\EnumValueInterface;

/**
 * Enum Type Definition
 *
 * Some leaf values of requests and input values are Enums. GraphQL serializes
 * Enum values as strings, however internally Enums can be represented by any
 * kind of type, often integers.
 *
 * This interface corresponds to the following reference implementation
 * except runtime and vendor-specific data.
 *
 * <code>
 *  export class GraphQLEnumType {
 *      name: string;
 *      description: Maybe<string>;
 *      extensions: Maybe<Readonly<GraphQLEnumTypeExtensions>>;
 *      astNode: Maybe<EnumTypeDefinitionNode>;
 *      extensionASTNodes: ReadonlyArray<EnumTypeExtensionNode>;
 *
 *      constructor(config: Readonly<GraphQLEnumTypeConfig>);
 *      getValues(): Array<GraphQLEnumValue>;
 *      getValue(name: string): Maybe<GraphQLEnumValue>;
 *      serialize(value: unknown): Maybe<string>;
 *      parseValue(value: unknown): Maybe<any>;
 *      parseLiteral(
 *          valueNode: ValueNode,
 *          _variables: Maybe<ObjMap<unknown>>,
 *      ): Maybe<any>;
 *
 *      toConfig(): GraphQLEnumTypeConfig & {
 *          extensions: Maybe<Readonly<GraphQLEnumTypeExtensions>>;
 *          extensionASTNodes: ReadonlyArray<EnumTypeExtensionNode>;
 *      };
 *
 *      toString(): string;
 *      toJSON(): string;
 *      inspect(): string;
 *      get [Symbol.toStringTag](): string;
 *  }
 * </code>
 */
interface EnumTypeInterface extends
    NamedTypeInterface,
    InputTypeInterface,
    NullableTypeInterface,
    LeafTypeInterface,
    OutputTypeInterface
{
    /**
     * @param string $name
     * @return EnumValueInterface|null
     */
    public function getValue(string $name): ?EnumValueInterface;

    /**
     * @param string $name
     * @return bool
     */
    public function hasValue(string $name): bool;

    /**
     * @return iterable<string, EnumValueInterface>
     */
    public function getValues(): iterable;
}
