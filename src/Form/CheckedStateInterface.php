<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts\Form;

use Stringable;
use UnitEnum;

/**
 * Defines the contract for form controls that expose the `checked` attribute.
 *
 * Applies to checkbox and radio controls, where the supplied value is matched against the control value to resolve the
 * checked state.
 */
interface CheckedStateInterface
{
    /**
     * Sets the `checked` attribute.
     *
     * @param array<mixed>|bool|float|int|string|Stringable|UnitEnum|null $value Value matched against the control
     * value to resolve the checked state, or `null` to remove the attribute.
     *
     * @return static New instance with the updated `checked` attribute.
     */
    public function checked(array|bool|float|int|string|Stringable|UnitEnum|null $value): static;
}
