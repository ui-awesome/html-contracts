---
name: ui-awesome-html-contracts
description: Use when implementing or adapting UI Awesome HTML interfaces for rendering, immutable attributes, element content, or form-control capabilities in PHP.
license: BSD-3-Clause
metadata:
  guide: https://yii2-framework.github.io/docs/extensions/html-contracts/
---

# Implement UI Awesome HTML contracts

Use `UIAwesome\Html\Contracts` for framework-independent interfaces. This package requires PHP 8.3 and supplies
contracts, not concrete tags, a renderer, asset loading, or a form framework. Do not instantiate interfaces or infer
implementation behavior from a successful installation.

## Resolve the installed contract and implementation

In a package checkout, inspect `composer show --self --format=json`, current `HEAD`, and actual files. For an installed
package, resolve the configured vendor directory and inspect `composer/installed.php`: `install_path`, `pretty_version`,
and selected `reference`. Compare `composer.lock`; it may differ from the installed files. Modified and symlinked
checkouts are governed by actual files, not a claimed published SHA. A lock-only state is not an installed runtime.

Resolve the implementing package separately. An interface's declared semantics do not prove a concrete class obeys
them; check its source and tests. Optional interfaces and widened signatures may be absent in older installed versions.
Consult only the relevant source interface/PHPDoc and local guide, or matching-revision sources at
<https://github.com/ui-awesome/html-contracts>. Hosted Markdown is useful after verifying the source revision:

- [Installation](https://yii2-framework.github.io/docs/extensions/html-contracts/installation/index.md).
- [Implementation examples](https://yii2-framework.github.io/docs/extensions/html-contracts/examples/index.md).
- [Validation](https://yii2-framework.github.io/docs/extensions/html-contracts/testing/index.md).

Guides may be excluded from Composer archives. If a matching guide is unavailable, use installed source and explain the
gap rather than assuming current hosted signatures apply to an older installation.

## Choose the smallest capability

- `RenderableInterface` extends `Stringable`; implement both `render(): string` and `__toString(): string`.
- `Attribute\AttributesInterface` specifies immutable attribute management. Bulk `attributes()` updates supplied keys
  while preserving other attributes; it is not whole-bag replacement. `addAttribute($key, null)` removes a key.
  Assign or chain the returned instance; the original must stay unchanged.
- `Form\FormControlInterface` combines rendering and attributes only. It does not promise `value()`, `placeholder()`,
  `checked()`, child content, or choices. Require the relevant capability with a type/intersection or `instanceof`
  check before calling it; retain a deliberate fallback or rejection for unsupported controls.
- `Attribute\ValueInterface` accepts scalar/enum/Stringable/null values, not arrays. `Form\MultiValueInterface` also
  accepts arrays. `Form\ChoiceListInterface::isList()` returns literal `true`; list-specific `enclosedByLabel()` is
  not an arbitrary standalone-control method. Inspect `CheckedStateInterface` separately for its broad input union.
- `Element\BlockInterface` means begin/end rendering in this library, not CSS block display. `begin()` returns opening
  markup for the caller to emit; `end()` is static. Preserve the concrete implementation's nesting/error behavior and
  whitespace rules instead of inventing a buffering algorithm. Inline/void markers likewise describe library contracts,
  not a browser content-model validator.

## Preserve content and cloning semantics

`Element\ContentInterface::content()` appends encoded text; `html()` appends trusted raw markup without encoding or
sanitizing. Both accept variadic `string|Stringable|UnitEnum` values in the current contract. Normalize backed enum values
(including integer zero) and pure enum names before encoding or raw insertion. Avoid truthiness filtering that drops
zero. Do not send untrusted input through `html()`.

`getContent()` returns a string. `Element\ClearableContentInterface` is an optional extension; existing content
implementations need not provide `clearContent()`. When supported, `clearContent()->content($value)` replaces accumulated
content with encoded text while preserving other component state. A shallow clone alone does not establish isolation
of mutable nested objects; test the actual state changed by the implementation.

Keep public implementations compatible with the full interface parameter unions and `static` return types. If upgrading
contracts widens a parameter, verify concrete implementations and overrides together; consumer call compatibility does
not prove an old, narrower implementing signature is still valid. Do not add required methods to the base interfaces
merely to support one optional consumer feature.

## Verify behavior, not just declarations

Load each used interface and implementation with the consumer's autoloader and run PHP syntax/static checks. Use small
consumer tests to verify return-instance isolation, preservation of unrelated attributes, null removal, encoded versus
raw content, enum zero, and optional-capability rejection as relevant. Test concrete begin/end behavior in its owning
package; this contracts-only package cannot demonstrate rendered markup or browser behavior by itself.

Distinguish signature checks from semantic compliance, supplied instructions from native skill activation, and focused
examples from a full test suite. Report unavailable dependencies or untested PHP versions without installing tools or
changing unrelated package constraints merely to make an example pass.
