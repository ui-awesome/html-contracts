<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts\Element;

use Stringable;
use UnitEnum;

/**
 * Defines the contract for elements that accept child content.
 *
 * Content appended through {@see content()} is encoded, whereas content appended through {@see html()} is preserved
 * verbatim.
 */
interface ContentInterface
{
    /**
     * Appends encoded content.
     *
     * Backed enums use their value (including `0`); pure enums use their name. Values are normalized before encoding.
     *
     * @param string|Stringable|UnitEnum ...$values Content to be encoded and appended.
     *
     * @return static New instance with appended encoded content.
     */
    public function content(string|Stringable|UnitEnum ...$values): static;

    /**
     * Returns the content assigned to the element.
     *
     * @return string Content value assigned to the element. Never `null`.
     */
    public function getContent(): string;

    /**
     * Appends trusted raw HTML content without encoding or sanitizing it.
     *
     * Backed enums use their value (including `0`); pure enums use their name.
     *
     * @param string|Stringable|UnitEnum ...$values Trusted raw HTML content to be appended.
     *
     * @return static New instance with appended raw HTML content.
     */
    public function html(string|Stringable|UnitEnum ...$values): static;
}
