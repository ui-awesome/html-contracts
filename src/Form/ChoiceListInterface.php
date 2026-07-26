<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts\Form;

/**
 * Defines the contract for form controls that render a list of choices.
 *
 * Applies to grouped controls such as checkbox and radio lists. Wrapping each choice in its own `<label>` element is
 * exclusive to list controls, so {@see enclosedByLabel()} belongs to this contract rather than to a standalone one.
 */
interface ChoiceListInterface
{
    /**
     * Sets whether each choice is wrapped by its own `<label>` element.
     *
     * @param bool $value Whether to enclose each choice by a `<label>` element.
     *
     * @return static New instance with the updated enclosing behavior.
     */
    public function enclosedByLabel(bool $value = true): static;

    /**
     * Identifies the control as one that renders a list of choices.
     *
     * @return true Always `true`.
     */
    public function isList(): true;
}
