<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts\Attribute;

use UnitEnum;

/**
 * Defines the public contract for objects that manage HTML attributes.
 *
 * Provides an immutable API for replacing, adding, reading, and removing HTML attributes on elements.
 *
 * @copyright Copyright (C) 2026 Terabytesoftw.
 * @license https://opensource.org/license/bsd-3-clause BSD 3-Clause License.
 */
interface AttributesInterface
{
    /**
     * Adds or updates a single HTML attribute for the element.
     *
     * @param string|UnitEnum $key Attribute name.
     * @param mixed $value Attribute value. Use `null` to remove the attribute.
     *
     * @return static New instance with the updated attribute.
     */
    public function addAttribute(string|UnitEnum $key, mixed $value): static;

    /**
     * Replaces all HTML attributes for the element.
     *
     * @param mixed[] $values Associative array of attribute keys and values.
     *
     * @return static New instance with the replaced attributes.
     */
    public function attributes(array $values): static;

    /**
     * Returns the value of a single HTML attribute.
     *
     * @param string|UnitEnum $key Attribute name.
     * @param mixed $default Default value when the attribute is missing.
     *
     * @return mixed Attribute value or default.
     */
    public function getAttribute(string|UnitEnum $key, mixed $default = null): mixed;

    /**
     * Returns the array of HTML attributes for the element.
     *
     * @return mixed[] Attributes array assigned to the element.
     */
    public function getAttributes(): array;

    /**
     * Removes a specific HTML attribute from the element.
     *
     * @param string|UnitEnum $key Attribute name to remove.
     *
     * @return static New instance without the specified attribute.
     */
    public function removeAttribute(string|UnitEnum $key): static;
}
