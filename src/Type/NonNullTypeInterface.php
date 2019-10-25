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
 * Non-Null Modifier
 *
 * A non-null is a kind of type marker, a wrapping type which points to another
 * type. Non-null types enforce that their values are never null and can ensure
 * an error is raised if this ever occurs during a request. It is useful for
 * fields which you can make a strong guarantee on non-nullability, for example
 * usually the id field of a database row will never be null.
 *
 * This interface corresponds to the following reference implementation
 * except runtime and vendor-specific data.
 *
 * <code>
 *  interface GraphQLNonNull<T extends GraphQLNullableType> {
 *      readonly ofType: T;
 *      toString(): string;
 *      toJSON(): string;
 *      inspect(): string;
 *  }
 * </code>
 */
interface NonNullTypeInterface extends
    WrappingTypeInterface,
    OutputTypeInterface,
    InputTypeInterface
{
}
