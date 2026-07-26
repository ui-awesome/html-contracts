<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts\Attribute;

use Stringable;
use UnitEnum;

/**
 * Defines the contract for elements that expose a single-valued `value` attribute.
 *
 * Applies to scalar-valued controls such as text inputs, hidden inputs, buttons, and options.
 */
interface ValueInterface
{
    /**
     * Sets the `value` attribute.
     *
     * @param bool|float|int|string|Stringable|UnitEnum|null $value Scalar value, or `null` to remove the attribute.
     *
     * @return static New instance with the updated `value` attribute.
     */
    public function value(bool|float|int|string|Stringable|UnitEnum|null $value): static;
}
