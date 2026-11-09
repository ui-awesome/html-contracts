<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts\Element;

/**
 * Defines an optional immutable API for clearing accumulated element content.
 *
 * Extends {@see ContentInterface} without requiring existing content implementations to support clearing.
 */
interface ClearableContentInterface extends ContentInterface
{
    /**
     * Clears encoded and raw content without changing other component state.
     *
     * @return static New instance with empty content.
     */
    public function clearContent(): static;
}
