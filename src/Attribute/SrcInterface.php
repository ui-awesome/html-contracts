<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts\Attribute;

use Stringable;
use UnitEnum;

/**
 * Defines the contract for elements that expose the `src` attribute.
 *
 * Applies to elements that embed an external resource, such as images, scripts, frames, and media sources.
 */
interface SrcInterface
{
    /**
     * Sets the `src` attribute.
     *
     * @param string|Stringable|UnitEnum|null $value URL of the embedded resource, or `null` to remove the attribute.
     *
     * @return static New instance with the updated `src` attribute.
     */
    public function src(string|Stringable|UnitEnum|null $value): static;
}
