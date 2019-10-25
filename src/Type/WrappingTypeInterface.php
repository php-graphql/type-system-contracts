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
 * These types wrap and modify other types.
 *
 * <code>
 *  export type GraphQLWrappingType =
 *      | GraphQLList<any>
 *      | GraphQLNonNull<any>
 *  ;
 * </code>
 */
interface WrappingTypeInterface extends TypeInterface
{
    /**
     * @return TypeInterface
     */
    public function getOfType(): TypeInterface;
}
