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
 *      extensions: Maybe<Readonly<Record<string, any>>>;
 *      astNode: Maybe<EnumTypeDefinitionNode>;
 *      extensionASTNodes: Maybe<ReadonlyArray<EnumTypeExtensionNode>>;
 *
 *      constructor(config: GraphQLEnumTypeConfig);
 *
 *      getValues(): GraphQLEnumValue[];
 *      getValue(name: string): Maybe<GraphQLEnumValue>;
 *      serialize(value: any): Maybe<string>;
 *      parseValue(value: any): Maybe<any>;
 *      parseLiteral(
 *          valueNode: ValueNode,
 *          _variables: Maybe<{ [key: string]: any }>,
 *      ): Maybe<any>;
 *
 *      toConfig(): GraphQLEnumTypeConfig & {
 *          extensions: Maybe<Readonly<Record<string, any>>>;
 *          extensionASTNodes: ReadonlyArray<EnumTypeExtensionNode>;
 *      };
 *
 *      toString(): string;
 *      toJSON(): string;
 *      inspect(): string;
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
     * @return EnumValueInterface[]
     */
    public function getValues(): iterable;
}
