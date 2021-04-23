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
 * Scalar Type Definition
 *
 * The leaf values of any request and input values to arguments are
 * Scalars (or Enums) and are defined with a name and a series of functions
 * used to parse input from ast or variables and to ensure validity.
 *
 * This interface corresponds to the following reference implementation
 * except runtime and vendor-specific data.
 *
 * <code>
 *  export class GraphQLScalarType {
 *      name: string;
 *      description: Maybe<string>;
 *      specifiedByURL: Maybe<string>;
 *      serialize: GraphQLScalarSerializer<unknown>;
 *      parseValue: GraphQLScalarValueParser<unknown>;
 *      parseLiteral: GraphQLScalarLiteralParser<unknown>;
 *      extensions: Maybe<Readonly<GraphQLScalarTypeExtensions>>;
 *      astNode: Maybe<ScalarTypeDefinitionNode>;
 *      extensionASTNodes: ReadonlyArray<ScalarTypeExtensionNode>;
 *
 *      constructor(config: Readonly<GraphQLScalarTypeConfig<unknown, unknown>>);
 *
 *      toConfig(): GraphQLScalarTypeConfig<unknown, unknown> & {
 *          specifiedByURL: Maybe<string>;
 *          serialize: GraphQLScalarSerializer<unknown>;
 *          parseValue: GraphQLScalarValueParser<unknown>;
 *          parseLiteral: GraphQLScalarLiteralParser<unknown>;
 *          extensions: Maybe<Readonly<GraphQLScalarTypeExtensions>>;
 *          extensionASTNodes: ReadonlyArray<ScalarTypeExtensionNode>;
 *      };
 *
 *      toString(): string;
 *      toJSON(): string;
 *      inspect(): string;
 *  }
 * </code>
 */
interface ScalarTypeInterface extends
    NamedTypeInterface,
    InputTypeInterface,
    LeafTypeInterface,
    NullableTypeInterface,
    OutputTypeInterface
{
    /**
     * An optional URI to custom scalar definitions pointing to a document
     * holding data-format, serialization, and coercion rules for the scalar.
     *
     * @see https://github.com/graphql/graphql-spec/issues/635
     * @return string|null
     */
    public function specifiedByUrl(): ?string;
}
