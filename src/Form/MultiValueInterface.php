<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts\Form;

use Stringable;
use UnitEnum;

/**
 * Defines the contract for form controls that accept one or many values.
 *
 * Applies to controls such as multiple-selection lists and choice lists, where the value is either a scalar or a set
 * of selected values.
 */
interface MultiValueInterface
{
    /**
     * Sets the `value` attribute.
     *
     * @param array<mixed>|bool|float|int|string|Stringable|UnitEnum|null $value Single value or set of selected
     * values, or `null` to remove the attribute.
     *
     * @return static New instance with the updated `value` attribute.
     */
    public function value(array|bool|float|int|string|Stringable|UnitEnum|null $value): static;
}
