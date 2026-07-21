# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## 0.1.1 Under development

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
