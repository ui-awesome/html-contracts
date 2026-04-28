# Changelog

All notable changes to this project will be documented in this file.

The format is based on Keep a Changelog, and this project adheres to Semantic Versioning.

## 0.1.0 Under development

- feat: add `AttributesInterface`, `FormControlInterface`, and `RenderableInterface` to combine rendering and attribute management for form controls.
- feat: introduce `BlockInterface`, `InlineInterface`, and `VoidInterface`, and move `AttributesInterface` and `FormControlInterface` into nested namespaces for HTML element management.
- refactor: decouple `BlockInterface`, `InlineInterface`, and `VoidInterface` from `BackedEnum` so class-based renderable elements can implement these contracts.
- refactor: simplify `AttributesInterface` to the public attributes API with `attributes()` replacement and `addAttribute()` single-attribute updates.
- chore: update `README.md` branding and align tooling config for PHP `8.3` and phpstan strict rules.
