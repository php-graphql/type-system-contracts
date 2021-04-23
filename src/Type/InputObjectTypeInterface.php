<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem\Type;

use GraphQL\Contracts\TypeSystem\InputFieldInterface;

/**
 * Input Object Type Definition
 *
 * An input object defines a structured collection of fields which may be
 * supplied to a field argument.
 *
 * Using `NonNull` will ensure that a value must be provided by the query.
 *
 * This interface corresponds to the following reference implementation
 * except runtime and vendor-specific data.
 *
 * <code>
 *  export class GraphQLInputObjectType {
 *      name: string;
 *      description: Maybe<string>;
 *      extensions: Maybe<Readonly<GraphQLInputObjectTypeExtensions>>;
 *      astNode: Maybe<InputObjectTypeDefinitionNode>;
 *      extensionASTNodes: ReadonlyArray<InputObjectTypeExtensionNode>;
 *
 *      constructor(config: Readonly<GraphQLInputObjectTypeConfig>);
 *      getFields(): GraphQLInputFieldMap;
 *
 *      toConfig(): GraphQLInputObjectTypeConfig & {
 *          fields: GraphQLInputFieldConfigMap;
 *          extensions: Maybe<Readonly<GraphQLInputObjectTypeExtensions>>;
 *          extensionASTNodes: ReadonlyArray<InputObjectTypeExtensionNode>;
 *      };
 *
 *      toString(): string;
 *      toJSON(): string;
 *      inspect(): string;
 *      get [Symbol.toStringTag](): string;
 *  }
 * </code>
 */
interface InputObjectTypeInterface extends
    NamedTypeInterface,
    InputTypeInterface,
    NullableTypeInterface
{
    /**
     * @param string $name
     * @return InputFieldInterface|null
     */
    public function getField(string $name): ?InputFieldInterface;

    /**
     * @param string $name
     * @return bool
     */
    public function hasField(string $name): bool;

    /**
     * @psalm-return iterable<string, InputFieldInterface>
     * @return iterable|InputFieldInterface[]
     */
    public function getFields(): iterable;
}
