# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## 0.2.1 Under development

## 0.2.0 July 31, 2026

- feat: add `SrcInterface` and `ValueInterface` to the `Attribute` namespace for elements exposing the `src` and `value` attributes.
- feat: add `ContentInterface` to the `Element` namespace for elements accepting encoded and raw HTML child content.
- feat: add `PlaceholderInterface` and `CheckedStateInterface` to the `Form` namespace for controls exposing the `placeholder` and `checked` attributes.
- feat: add `ChoiceListInterface` to the `Form` namespace to identify choice-list controls and expose `enclosedByLabel()`.
- feat: add `MultiValueInterface` to the `Form` namespace for controls accepting one or many selected values.
- refactor!: extend `InlineInterface` from `ContentInterface` and remove its own `content()`, `getContent()`, and `html()` declarations; implementers must widen the variadic parameter to `string|Stringable`, previously `string|RenderableInterface`.

## 0.1.1 July 21, 2026

- chore: update workflow dependencies to use version `v1` for consistency.
- chore: migrate to `yii2-extensions/scaffold` consumer model with `php-forge/baseline` and `php-forge/coding-standard`.
- chore: remove redundant copyright and license annotations from source interfaces and add Composer author metadata.

## 0.1.0 April 28, 2026

- feat: add `AttributesInterface`, `FormControlInterface`, and `RenderableInterface` to combine rendering and attribute management for form controls.
- feat: introduce `BlockInterface`, `InlineInterface`, and `VoidInterface`, and move `AttributesInterface` and `FormControlInterface` into nested namespaces for HTML element management.
- refactor: decouple `BlockInterface`, `InlineInterface`, and `VoidInterface` from `BackedEnum` so class-based renderable elements can implement these contracts.
- refactor: simplify `AttributesInterface` to the public attributes API with `attributes()` replacement and `addAttribute()` single-attribute updates.
- chore: update `README.md` branding and align tooling config for PHP `8.3` and phpstan strict rules.
- chore: refine `composer.json` description and keywords to reflect the published interfaces (renderable, attributes, form control, block, inline, void).
