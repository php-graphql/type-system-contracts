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
 * Interface NameAwareInterface
 */
interface NameAwareInterface
{
    /**
     * @return string
     */
    public function getName(): string;
}
