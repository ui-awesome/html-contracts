<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts\Element;

use LogicException;
use RuntimeException;
use UIAwesome\Html\Contracts\RenderableInterface;

/**
 * Defines a contract for renderable HTML elements that use separate opening and closing tags.
 *
 * In this library, "Block" refers to elements rendered with {@see begin()} and {@see end()} methods, not HTML's
 * standard block-level content categories.
 *
 * @see https://developer.mozilla.org/en-US/docs/Glossary/Block-level_content
 */
interface BlockInterface extends RenderableInterface
{
    /**
     * Starts begin/end rendering for this instance.
     *
     * Returns the opening markup to the caller, who emits content between `begin()` and `end()`.
     * The `pre` and `textarea` begin/end pair adds no automatic newlines.
     *
     * @return string Opening HTML markup for the element.
     */
    public function begin(): string;

    /**
     * Ends the most recent begin/end rendering block for the current class.
     *
     * @throws LogicException if no matching `begin()` call is found.
     * @throws RuntimeException if the tag class does not match the expected type.
     *
     * @return string Rendered HTML tag string.
     */
    public static function end(): string;
}
