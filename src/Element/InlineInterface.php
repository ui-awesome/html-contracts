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
 * Combines rendering capability with the child content API inherited from {@see ContentInterface}.
 *
 * @see https://developer.mozilla.org/en-US/docs/Glossary/Inline-level_content
 */
interface InlineInterface extends ContentInterface, RenderableInterface {}
