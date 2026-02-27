<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts\Element;

use BackedEnum;
use UIAwesome\Html\Contracts\RenderableInterface;

/**
 * Defines a contract for HTML tag enums backed by {@see BackedEnum} that represent void (self-closing) elements.
 *
 * In this library, "Void" refers to elements that do not have separate opening and closing tags, not HTML's
 * standard void element categories.
 *
 * @link https://developer.mozilla.org/en-US/docs/Glossary/Void_element
 *
 * @copyright Copyright (C) 2026 Terabytesoftw.
 * @license https://opensource.org/license/bsd-3-clause BSD 3-Clause License.
 */
interface VoidInterface extends BackedEnum, RenderableInterface {}
