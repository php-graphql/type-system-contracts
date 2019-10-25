<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem\Common;

use GraphQL\Contracts\TypeSystem\ArgumentInterface;

/**
 * Interface ArgumentsAwareInterface
 */
interface ArgumentsAwareInterface
{
    /**
     * @param string $name
     * @return ArgumentInterface|null
     */
    public function getArgument(string $name): ?ArgumentInterface;

    /**
     * @param string $name
     * @return bool
     */
    public function hasArgument(string $name): bool;

    /**
     * @psalm-return iterable<string, ArgumentInterface>
     * @return iterable|ArgumentInterface[]
     */
    public function getArguments(): iterable;
}
