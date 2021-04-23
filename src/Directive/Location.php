<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem\Directive;

/**
 * @psalm-type LocationType = Location::*
 */
final class Location
{
    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_QUERY)]
    public const QUERY = 'QUERY';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_QUERY)]
    public const MUTATION = 'MUTATION';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_QUERY)]
    public const SUBSCRIPTION = 'SUBSCRIPTION';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_QUERY)]
    public const FIELD = 'FIELD';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_QUERY)]
    public const FRAGMENT_DEFINITION = 'FRAGMENT_DEFINITION';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_QUERY)]
    public const FRAGMENT_SPREAD = 'FRAGMENT_SPREAD';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_QUERY)]
    public const INLINE_FRAGMENT = 'INLINE_FRAGMENT';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_QUERY)]
    public const VARIABLE_DEFINITION = 'VARIABLE_DEFINITION';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_TYPE_SYSTEM)]
    public const SCHEMA = 'SCHEMA';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_TYPE_SYSTEM)]
    public const SCALAR = 'SCALAR';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_TYPE_SYSTEM)]
    public const OBJECT = 'OBJECT';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_TYPE_SYSTEM)]
    public const FIELD_DEFINITION = 'FIELD_DEFINITION';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_TYPE_SYSTEM)]
    public const ARGUMENT_DEFINITION = 'ARGUMENT_DEFINITION';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_TYPE_SYSTEM)]
    public const INTERFACE = 'INTERFACE';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_TYPE_SYSTEM)]
    public const UNION = 'UNION';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_TYPE_SYSTEM)]
    public const ENUM = 'ENUM';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_TYPE_SYSTEM)]
    public const ENUM_VALUE = 'ENUM_VALUE';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_TYPE_SYSTEM)]
    public const INPUT_OBJECT = 'INPUT_OBJECT';

    /**
     * @var LocationType
     */
    #[LocationContext(context: LocationContext::CONTEXT_TYPE_SYSTEM)]
    public const INPUT_FIELD_DEFINITION = 'INPUT_FIELD_DEFINITION';
}
