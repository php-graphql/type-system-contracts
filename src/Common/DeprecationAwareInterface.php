<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem\Common;

/**
 * Interface for GraphQL definitions that can be deprecated.
 *
 * @see https://graphql.github.io/graphql-spec/draft/#sec--deprecated
 */
interface DeprecationAwareInterface
{
    /**
     * @return null|string
     */
    public function getDeprecationReason(): ?string;

    /**
     * @deprecated Please, use {@see DeprecationAwareInterface::getDeprecationReason()} method instead.
     * @return bool
     */
    public function isDeprecated(): bool;
}
