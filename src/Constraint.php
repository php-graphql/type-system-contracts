<?php

/**
 * This file is part of GraphQL TypeSystem Contracts package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace GraphQL\Contracts\TypeSystem;

use GraphQL\Contracts\TypeSystem\Type\{
    TypeInterface,
    EnumTypeInterface,
    ListTypeInterface,
    LeafTypeInterface,
    UnionTypeInterface,
    InputTypeInterface,
    NamedTypeInterface,
    ObjectTypeInterface,
    ScalarTypeInterface,
    OutputTypeInterface,
    NonNullTypeInterface,
    AbstractTypeInterface,
    NullableTypeInterface,
    WrappingTypeInterface,
    InterfaceTypeInterface,
    CompositeTypeInterface,
    InputObjectTypeInterface
};

/**
 * This class provides a list of methods for checking types for
 * compliance with any behaviour.
 */
final class Constraint
{
    /**
     * Constraint constructor.
     */
    public function __construct()
    {
        throw new \LogicException('Can not create instance of static class');
    }

    /**
     * <code>
     *  export function isType(type: any):
     *      type is GraphQLType
     *  ;
     * </code>
     *
     * @param object $type
     * @return bool
     */
    public static function isType($type): bool
    {
        return $type instanceof TypeInterface;
    }

    /**
     * <code>
     *  export function isScalarType(type: any):
     *      type is GraphQLScalarType
     *  ;
     * </code>
     *
     * @param object $type
     * @return bool
     */
    public static function isScalarType($type): bool
    {
        return $type instanceof ScalarTypeInterface;
    }

    /**
     * <code>
     *  export function isObjectType(type: any):
     *      type is GraphQLObjectType
     *  ;
     * </code>
     *
     * @param object $type
     * @return bool
     */
    public static function isObjectType($type): bool
    {
        return $type instanceof ObjectTypeInterface;
    }

    /**
     * <code>
     *  export function isInterfaceType(type: any):
     *      type is GraphQLInterfaceType
     *  ;
     * </code>
     *
     * @param object $type
     * @return bool
     */
    public static function isInterfaceType($type): bool
    {
        return $type instanceof InterfaceTypeInterface;
    }

    /**
     * <code>
     *  export function isUnionType(type: any):
     *      type is GraphQLUnionType
     *  ;
     * </code>
     *
     * @param object $type
     * @return bool
     */
    public static function isUnionType($type): bool
    {
        return $type instanceof UnionTypeInterface;
    }

    /**
     * <code>
     *  export function isEnumType(type: any):
     *      type is GraphQLEnumType
     *  ;
     * </code>
     *
     * @param object $type
     * @return bool
     */
    public static function isEnumType($type): bool
    {
        return $type instanceof EnumTypeInterface;
    }

    /**
     * <code>
     *  export function isInputObjectType(type: any):
     *      type is GraphQLInputObjectType
     *  ;
     * </code>
     *
     * @param object $type
     * @return bool
     */
    public static function isInputObjectType($type): bool
    {
        return $type instanceof InputObjectTypeInterface;
    }

    /**
     * <code>
     *  export function isListType(type: any):
     *      type is GraphQLList<any>
     *  ;
     * </code>
     *
     * @param object $type
     * @return bool
     */
    public static function isListType($type): bool
    {
        return $type instanceof ListTypeInterface;
    }

    /**
     * <code>
     *  export function isInputType(type: any):
     *      type is GraphQLInputType
     *  ;
     * </code>
     *
     * @param object $type
     * @return bool
     */
    public static function isInputType($type): bool
    {
        return $type instanceof InputTypeInterface;
    }

    /**
     * <code>
     *  export function isOutputType(type: any):
     *      type is GraphQLOutputType
     *  ;
     * </code>
     *
     * @param object $type
     * @return bool
     */
    public static function isOutputType($type): bool
    {
        return $type instanceof OutputTypeInterface;
    }

    /**
     * <code>
     *  export function isLeafType(type: any):
     *      type is GraphQLLeafType
     *  ;
     * </code>
     *
     * @param object $type
     * @return bool
     */
    public static function isLeafType($type): bool
    {
        return $type instanceof LeafTypeInterface;
    }

    /**
     * <code>
     *  export function isCompositeType(type: any):
     *      type is GraphQLCompositeType
     *  ;
     * </code>
     *
     * @param object $type
     * @return bool
     */
    public static function isCompositeType($type): bool
    {
        return $type instanceof CompositeTypeInterface;
    }

    /**
     * <code>
     *  export function isAbstractType(type: any):
     *      type is GraphQLAbstractType
     *  ;
     * </code>
     *
     * @param object $type
     * @return bool
     */
    public static function isAbstractType($type): bool
    {
        return $type instanceof AbstractTypeInterface;
    }

    /**
     * <code>
     *  export function isWrappingType(type: any):
     *      type is GraphQLWrappingType
     *  ;
     * </code>
     *
     * @param object $type
     * @return bool
     */
    public static function isWrappingType($type): bool
    {
        return $type instanceof WrappingTypeInterface;
    }

    /**
     * <code>
     *  export function isNullableType(type: any):
     *      type is GraphQLNullableType
     *  ;
     * </code>
     *
     * @param object $type
     * @return bool
     */
    public static function isNullableType($type): bool
    {
        return $type instanceof NullableTypeInterface;
    }

    /**
     * <code>
     *  export function isNamedType(type: any):
     *      type is GraphQLNamedType
     *  ;
     * </code>
     *
     * @param object $type
     * @return bool
     */
    public static function isNamedType($type): bool
    {
        return $type instanceof NamedTypeInterface;
    }

    /**
     * <code>
     *  export function isRequiredArgument(arg: GraphQLArgument):
     *      boolean
     *  ;
     * </code>
     *
     * @param ArgumentInterface $arg
     * @return bool
     */
    public static function isRequiredArgument(ArgumentInterface $arg): bool
    {
        return static::isNonNullType($arg->getType()) && ! $arg->hasDefaultValue();
    }

    /**
     * <code>
     *  export function isNonNullType(type: any):
     *      type is GraphQLNonNull<any>
     *  ;
     * </code>
     *
     * @param object $type
     * @return bool
     */
    public static function isNonNullType($type): bool
    {
        return $type instanceof NonNullTypeInterface;
    }

    /**
     * <code>
     *  export function isRequiredArgument(field: GraphQLInputField):
     *      boolean
     *  ;
     * </code>
     *
     * @param InputFieldInterface $field
     * @return bool
     */
    public static function isRequiredInputField(InputFieldInterface $field): bool
    {
        return static::isNonNullType($field->getType()) && ! $field->hasDefaultValue();
    }
}
