<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts\Element;

use Stringable;

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
     * Usage example:
     * ```php
     * $someTag->content('Hello, <World>!');
     * ```
     *
     * @param string|Stringable ...$values Content to be encoded and appended.
     *
     * @return static New instance with appended encoded content.
     */
    public function content(string|Stringable ...$values): static;

    /**
     * Returns the content assigned to the element.
     *
     * Usage example:
     * ```php
     * $someTag->getContent();
     * ```
     *
     * @return string Content value assigned to the element. Never `null`.
     */
    public function getContent(): string;

    /**
     * Appends raw HTML content.
     *
     * Usage example:
     * ```php
     * $someTag->html('<strong>Hello, World!</strong>');
     * ```
     *
     * @param string|Stringable ...$values Raw HTML content to be appended.
     *
     * @return static New instance with appended raw HTML content.
     */
    public function html(string|Stringable ...$values): static;
}
