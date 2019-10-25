<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem\Common;

use GraphQL\Contracts\TypeSystem\Type\InterfaceTypeInterface;

/**
 * Interface ImplementInterfacesAwareInterface
 */
interface InterfacesAwareInterface
{
    /**
     * @param string $name
     * @return InterfaceTypeInterface|null
     */
    public function getInterface(string $name): ?InterfaceTypeInterface;

    /**
     * @param string $name
     * @return bool
     */
    public function hasInterface(string $name): bool;

    /**
     * @return InterfaceTypeInterface[]
     */
    public function getInterfaces(): iterable;
}
