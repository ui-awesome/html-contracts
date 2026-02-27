<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts\Element;

use UIAwesome\Html\Contracts\RenderableInterface;

/**
 * Defines a contract for renderable HTML elements that render as single-line elements.
 *
 * In this library, "Inline" refers to elements rendered on the same line, not HTML's standard inline-level content
 * categories.
 *
 * @link https://developer.mozilla.org/en-US/docs/Glossary/Inline-level_content
 *
 * @copyright Copyright (C) 2026 Terabytesoftw.
 * @license https://opensource.org/license/bsd-3-clause BSD 3-Clause License.
 */
interface InlineInterface extends RenderableInterface
{
    /**
     * Appends encoded content.
     *
     * Usage example:
     * ```php
     * $someTag->content('Hello, <World>!');
     * ```
     *
     * @param string|RenderableInterface ...$values Content to be encoded and appended.
     *
     * @return static New instance with appended encoded content.
     */
    public function content(string|RenderableInterface ...$values): static;

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
     * @param string|RenderableInterface ...$values Raw HTML content to be appended.
     *
     * @return static New instance with appended raw HTML content.
     */
    public function html(string|RenderableInterface ...$values): static;
}
