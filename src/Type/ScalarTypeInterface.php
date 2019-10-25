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
 *      serialize: GraphQLScalarSerializer<any>;
 *      parseValue: GraphQLScalarValueParser<any>;
 *      parseLiteral: GraphQLScalarLiteralParser<any>;
 *      extensions: Maybe<Readonly<Record<string, any>>>;
 *      astNode: Maybe<ScalarTypeDefinitionNode>;
 *      extensionASTNodes: Maybe<ReadonlyArray<ScalarTypeExtensionNode>>;
 *
 *      constructor(config: GraphQLScalarTypeConfig<any, any>);
 *
 *      toConfig(): GraphQLScalarTypeConfig<any, any> & {
 *          serialize: GraphQLScalarSerializer<any>;
 *          parseValue: GraphQLScalarValueParser<any>;
 *          parseLiteral: GraphQLScalarLiteralParser<any>;
 *          extensions: Maybe<Readonly<Record<string, any>>>;
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

}
