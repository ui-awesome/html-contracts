# Implementation examples

These examples use the current source contracts. Verify the installed version before adopting optional interfaces or
newer parameter signatures. Contracts specify behavior; concrete implementations must supply and test it.

## A minimal renderable object

`RenderableInterface` extends PHP's `Stringable`, so a concrete class implements both methods.

```php
<?php

declare(strict_types=1);

use UIAwesome\Html\Contracts\RenderableInterface;

final class Greeting implements RenderableInterface
{
    public function render(): string
    {
        return '<p>Hello</p>';
    }

    public function __toString(): string
    {
        return $this->render();
    }
}

echo new Greeting();
```

## Preserve immutable updates

Attribute methods return a new instance. Bulk updates preserve unspecified attributes; a null single value removes
an attribute. Keep the returned instance rather than expecting the original object to change.

```php
use UIAwesome\Html\Contracts\Attribute\AttributesInterface;

function configureButton(AttributesInterface $button): AttributesInterface
{
    return $button
        ->attributes(['type' => 'button', 'aria-label' => 'Save'])
        ->addAttribute('disabled', null)
        ->class('action');
}
```

Test the implementation by asserting that the returned object differs from the original, original attributes remain
unchanged, and unrelated attributes survive the bulk update. Interface declarations alone do not enforce those facts.

## Encoded text and trusted markup

`content()` appends encoded text. `html()` appends trusted raw HTML without sanitization. Both normalize enum values;
backed integer zero must be retained, and pure enums use their names.

```php
use UIAwesome\Html\Contracts\Element\ContentInterface;

function appendLabel(ContentInterface $element, string $label): ContentInterface
{
    return $element->content($label)->html('<span aria-hidden="true">*</span>');
}
```

Never pass arbitrary user input to `html()`. Content accumulates; calling `content()` does not replace previous content.
Clearing is an optional capability, not a method guaranteed by every `ContentInterface` implementation.

```php
use UIAwesome\Html\Contracts\Element\ClearableContentInterface;

function replaceLabel(ClearableContentInterface $element, string $label): ClearableContentInterface
{
    return $element->clearContent()->content($label);
}
```

The implementation must preserve other component state when clearing and must leave the original object unchanged.

## Require form capabilities explicitly

`FormControlInterface` guarantees rendering and attributes only. A placeholder method needs its own capability.

```php
use UIAwesome\Html\Contracts\Form\FormControlInterface;
use UIAwesome\Html\Contracts\Form\PlaceholderInterface;

function renderSearch(FormControlInterface&PlaceholderInterface $control): string
{
    return $control->placeholder('Search')->class('search')->render();
}
```

Use `Attribute\ValueInterface` for single values and `Form\MultiValueInterface` when arrays are needed. Do not
assume a control implementing the base form contract supports either one. Check capabilities before optional operations.

## Begin and end rendering

`Element\BlockInterface::begin()` returns opening markup to emit; `end()` is static and closes the matching rendering
block. Buffering, nesting and whitespace depend on the implementation, so test these with the concrete package.
The block/inline/void names describe this library's rendering contracts, not CSS display or HTML validity checks.

## Signature compatibility

`ContentInterface::content()` and `html()` accept variadic `string|Stringable|UnitEnum` arguments. Implementations and
overrides with narrower parameters must be updated together when adopting the widened declarations. Check the
implementing package's Composer constraint and actual source, not only whether existing consumer calls still work.

[Back to documentation](../README.md#documentation)
