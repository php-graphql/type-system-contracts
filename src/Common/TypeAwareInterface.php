<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem\Common;

use GraphQL\Contracts\TypeSystem\Type\TypeInterface;

/**
 * @template-covariant T of TypeInterface
 */
interface TypeAwareInterface
{
    /**
     * @return T
     */
    public function getType(): TypeInterface;
}
