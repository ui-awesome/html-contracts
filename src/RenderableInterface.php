<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts;

use Stringable;

/**
 * Defines the contract for objects that can be rendered as HTML strings.
 *
 * Implementing classes produce their HTML representation via {@see render()} and support string casting via
 * {@see Stringable}.
 *
 * @copyright Copyright (C) 2026 Terabytesoftw.
 * @license https://opensource.org/license/bsd-3-clause BSD 3-Clause License.
 */
interface RenderableInterface extends Stringable
{
    /**
     * Renders the object as an HTML string.
     *
     * @return string Rendered HTML output.
     */
    public function render(): string;
}
