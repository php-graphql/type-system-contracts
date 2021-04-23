<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem\Common;

use GraphQL\Contracts\TypeSystem\FieldInterface;

interface FieldsAwareInterface
{
    /**
     * @param string $name
     * @return FieldInterface|null
     */
    public function getField(string $name): ?FieldInterface;

    /**
     * @param string $name
     * @return bool
     */
    public function hasField(string $name): bool;

    /**
     * @return iterable<string, FieldInterface>
     */
    public function getFields(): iterable;
}
