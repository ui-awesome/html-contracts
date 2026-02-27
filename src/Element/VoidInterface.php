<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts\Element;

use BackedEnum;

/**
 * Defines a contract for void (self-closing) HTML tag enums backed by {@see BackedEnum}.
 *
 * @link https://developer.mozilla.org/en-US/docs/Glossary/Void_element
 *
 * @copyright Copyright (C) 2025 Terabytesoftw.
 * @license https://opensource.org/license/bsd-3-clause BSD 3-Clause License.
 */
interface VoidInterface extends BackedEnum {}
