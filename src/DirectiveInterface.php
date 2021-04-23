<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem;

use GraphQL\Contracts\TypeSystem\Common\NameAwareInterface;
use GraphQL\Contracts\TypeSystem\Common\ArgumentsAwareInterface;
use GraphQL\Contracts\TypeSystem\Common\DescriptionAwareInterface;

/**
 * Directives are used by the GraphQL runtime as a way of modifying execution
 * behavior. Type system creators will usually not create these directly.
 *
 * This interface corresponds to the following reference implementation
 * except runtime and vendor-specific data.
 *
 * <code>
 *  export class GraphQLDirective {
 *      name: string;
 *      description: Maybe<string>;
 *      locations: Array<DirectiveLocationEnum>;
 *      isRepeatable: boolean;
 *      args: Array<GraphQLArgument>;
 *      extensions: Maybe<Readonly<GraphQLDirectiveExtensions>>;
 *      astNode: Maybe<DirectiveDefinitionNode>;
 *
 *      constructor(config: Readonly<GraphQLDirectiveConfig>);
 *
 *      toConfig(): GraphQLDirectiveConfig & {
 *          args: GraphQLFieldConfigArgumentMap;
 *          isRepeatable: boolean;
 *          extensions: Maybe<Readonly<GraphQLDirectiveExtensions>>;
 *      };
 *
 *      toString(): string;
 *      toJSON(): string;
 *      inspect(): string;
 *      get [Symbol.toStringTag](): string;
 *  }
 * </code>
 */
interface DirectiveInterface extends
    DefinitionInterface,
    NameAwareInterface,
    DescriptionAwareInterface,
    ArgumentsAwareInterface
{
    /**
     * Means that the directive can be defined several times
     * in the same place.
     *
     * @see https://github.com/graphql/graphql-js/pull/1541
     * @return bool
     */
    public function isRepeatable(): bool;

    /**
     * @param string $name
     * @return bool
     */
    public function hasLocation(string $name): bool;

    /**
     * @psalm-return iterable<int, string>
     * @return iterable|string[]
     */
    public function getLocations(): iterable;
}
