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
 * List Modifier
 *
 * A list is a kind of type marker, a wrapping type which points to another
 * type. Lists are often created within the context of defining the fields
 * of an object type.
 *
 * This interface corresponds to the following reference implementation
 * except runtime and vendor-specific data.
 *
 * <code>
 *  export class GraphQLList<T extends GraphQLType> {
 *      readonly ofType: T;
 *
 *      constructor(type: T);
 *
 *      toString: () => string;
 *      toJSON: () => string;
 *      inspect: () => string;
 *      get [Symbol.toStringTag](): string;
 *  }
 * </code>
 */
interface ListTypeInterface extends
    WrappingTypeInterface,
    OutputTypeInterface,
    InputTypeInterface,
    NullableTypeInterface
{

}
