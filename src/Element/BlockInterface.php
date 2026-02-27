<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts\Element;

use BackedEnum;
use LogicException;
use RuntimeException;
use UIAwesome\Html\Contracts\RenderableInterface;

/**
 * Defines a contract for HTML tag enums backed by {@see BackedEnum} that use separate opening and closing tags.
 *
 * In this library, "Block" refers to elements rendered with {@see begin()} and {@see end()} methods, not HTML's
 * standard block-level content categories.
 *
 * @link https://developer.mozilla.org/en-US/docs/Glossary/Block-level_content
 *
 * @copyright Copyright (C) 2026 Terabytesoftw.
 * @license https://opensource.org/license/bsd-3-clause BSD 3-Clause License.
 */
interface BlockInterface extends BackedEnum, RenderableInterface
{
    /**
     * Starts begin/end rendering for this instance.
     *
     * Usage example:
     * ```php
     * <?= SomeTag::tag()->begin() ?>
     * Content inside the tag.
     * <?= SomeTag::end() ?>
     * ```
     *
     * @return string Empty string for output buffering compatibility.
     */
    public function begin(): string;

    /**
     * Ends the most recent begin/end rendering block for the current class.
     *
     * Usage example:
     * ```php
     * <?= SomeTag::end() ?>
     * ```
     *
     * @throws LogicException if no matching `begin()` call is found.
     * @throws RuntimeException if the tag class does not match the expected type.
     *
     * @return string Rendered HTML tag string.
     */
    public static function end(): string;
}
