<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem\Directive;

use JetBrains\PhpStorm\ExpectedValues;
use JetBrains\PhpStorm\Pure;

/**
 * @psalm-type LocationContextType = LocationContext::CONTEXT_*
 */
#[\Attribute(\Attribute::TARGET_CLASS_CONSTANT)]
final class LocationContext
{
    /**
     * @var LocationContextType
     */
    public const CONTEXT_QUERY = 0x01;

    /**
     * @var LocationContextType
     */
    public const CONTEXT_TYPE_SYSTEM = 0x02;

    /**
     * @var int-mask-of<LocationContextType>
     */
    public $context;

    /**
     * @param int-mask-of<LocationContextType> $context
     */
    public function __construct(
        #[ExpectedValues(flagsFromClass: LocationContext::class)]
        int $context
    ) {
        $this->context = $context;
    }

    /**
     * Checks that the passed location context matches the passed value.
     *
     * @param LocationContextType $expected
     * @return bool
     */
    public function is(
        #[ExpectedValues(valuesFromClass: LocationContext::class)]
        int $expected
    ): bool {
        return ($this->context & $expected) === $expected;
    }

    /**
     * Checks that the passed location context matches the type system.
     *
     * @return bool
     */
    #[Pure]
    public function isTypeSystem(): bool
    {
        return $this->is(self::CONTEXT_TYPE_SYSTEM);
    }

    /**
     * Checks that the passed location context matches the query.
     *
     * @return bool
     */
    #[Pure]
    public function isQuery(): bool
    {
        return $this->is(self::CONTEXT_QUERY);
    }
}
