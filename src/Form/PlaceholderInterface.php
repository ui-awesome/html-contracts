<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts\Form;

use Stringable;
use UnitEnum;

/**
 * Defines the contract for form controls that expose the `placeholder` attribute.
 *
 * Applies to controls that display a short hint describing the expected value before the user enters data.
 */
interface PlaceholderInterface
{
    /**
     * Sets the `placeholder` attribute.
     *
     * @param string|Stringable|UnitEnum|null $value Expected-value hint, or `null` to remove the attribute.
     *
     * @return static New instance with the updated `placeholder` attribute.
     */
    public function placeholder(string|Stringable|UnitEnum|null $value): static;
}
