# Changelog

## 0.1.0 Under development

- Enh #1: Add `AttributesInterface`, `FormControlInterface` and `RenderableInterface` combining rendering and attribute management for form controls (@terabytesoftw)
- Enh #2: Introduce `BlockInterface`, `InlineInterface`, and `VoidInterface` interfaces, and refactor `AttributesInterface` and `FormControlInterface` into nested namespaces for enhanced HTML element management (@terabytesoftw)
- Chg #3: Decouple `BlockInterface`, `InlineInterface`, and `VoidInterface` from `BackedEnum` so class-based renderable elements can implement these contracts (@terabytesoftw)
- Chg #4: Simplify `AttributesInterface` to the public attributes API with `attributes()` replacement and `addAttribute()` single-attribute updates (@terabytesoftw)
