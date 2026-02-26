<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts;

use Stringable;
use UnitEnum;

/**
 * Defines the contract for objects that manage HTML attributes.
 *
 * Provides an immutable API for setting, getting, and removing HTML attributes on elements.
 *
 * @copyright Copyright (C) 2026 Terabytesoftw.
 * @license https://opensource.org/license/bsd-3-clause BSD 3-Clause License.
 */
interface AttributesInterface
{
    /**
     * Sets one or more HTML attributes for the element.
     *
     * @param array $values Associative array of attribute keys and values.
     * @param string $prefix Prefix to ensure (for example, `aria-`, `data-`, `on`).
     *
     * @return static New instance with the updated attributes.
     *
     * @phpstan-param mixed[] $values
     */
    public function attributes(array $values, string $prefix = ''): static;

    /**
     * Sets the `class` attribute.
     *
     * @param string|Stringable|UnitEnum|null $value CSS class value, or `null` to remove the attribute.
     * @param bool $override Whether to override existing classes (`true`) or merge (`false`).
     *
     * @return static New instance with the updated `class` attribute.
     */
    public function class(string|Stringable|UnitEnum|null $value, bool $override = false): static;

    /**
     * Returns the value of a single HTML attribute.
     *
     * @param string|UnitEnum $key Attribute name.
     * @param mixed $default Default value when the attribute is missing.
     * @param string $prefix Prefix to ensure (for example, `aria-`, `data-`, `on`).
     *
     * @return mixed Attribute value or default.
     */
    public function getAttribute(string|UnitEnum $key, mixed $default = null, string $prefix = ''): mixed;

    /**
     * Returns the array of HTML attributes for the element.
     *
     * @return array Attributes array assigned to the element.
     *
     * @phpstan-return mixed[]
     */
    public function getAttributes(): array;

    /**
     * Removes a specific HTML attribute from the element.
     *
     * @param string|UnitEnum $key Attribute name to remove.
     * @param string $prefix Prefix to ensure (for example, `aria-`, `data-`, `on`).
     *
     * @return static New instance without the specified attribute.
     */
    public function removeAttribute(string|UnitEnum $key, string $prefix = ''): static;

    /**
     * Sets a single HTML attribute for the element.
     *
     * @param string|UnitEnum $key Attribute name.
     * @param mixed $value Attribute value.
     * @param string $prefix Prefix to ensure (for example, `aria-`, `data-`, `on`).
     *
     * @return static New instance with the updated attribute.
     */
    public function setAttribute(string|UnitEnum $key, mixed $value, string $prefix = ''): static;
}
