<?php

declare(strict_types=1);

namespace UIAwesome\Html\Contracts\Form;

use UIAwesome\Html\Contracts\Attribute\AttributesInterface;
use UIAwesome\Html\Contracts\RenderableInterface;

/**
 * Defines the contract for form control elements (inputs, selects, textareas, etc.).
 *
 * Combines rendering capability with attribute management, providing the minimal interface needed for field wrappers
 * to configure and render form controls.
 *
 * @copyright Copyright (C) 2026 Terabytesoftw.
 * @license https://opensource.org/license/bsd-3-clause BSD 3-Clause License.
 */
interface FormControlInterface extends RenderableInterface, AttributesInterface {}
