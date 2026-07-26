<!-- markdownlint-disable MD041 -->
<p align="center">
    <a href="https://github.com/ui-awesome/html-contracts" target="_blank">
        <img src="https://raw.githubusercontent.com/ui-awesome/.github/refs/heads/main/logo/ui_awesome.png" alt="UI Awesome" width="25%">
    </a>
    <h1 align="center">HTML Contracts for PHP</h1>
    <br>
</p>
<!-- markdownlint-enable MD041 -->

<p align="center">
    <a href="https://github.com/ui-awesome/html-contracts/actions/workflows/static.yml" target="_blank">
        <img src="https://img.shields.io/github/actions/workflow/status/ui-awesome/html-contracts/static.yml?style=for-the-badge&label=PHPStan&logo=github" alt="PHPStan">
    </a>
    <a href="https://github.com/ui-awesome/html-contracts/actions/workflows/security.yml" target="_blank">
        <img src="https://img.shields.io/github/actions/workflow/status/ui-awesome/html-contracts/security.yml?style=for-the-badge&label=Security&logo=github" alt="Security">
    </a>
</p>

<p align="center">
    <strong>Contracts (interfaces) for the UI Awesome HTML ecosystem for PHP</strong><br>
    <em>Provides shared interfaces for rendering, attribute management, and form control typing across HTML packages.</em>
</p>

### Installation

```bash
composer require ui-awesome/html-contracts:^0.2
```

### Interfaces

#### RenderableInterface

Core contract for any object that can be rendered as an HTML string. Extends `Stringable`.

```php
<?php

declare(strict_types=1);

use UIAwesome\Html\Contracts\RenderableInterface;

final class MyTag implements RenderableInterface
{
    public function __toString(): string
    {
        return $this->render();
    }

    public function render(): string
    {
        return '<div>Hello</div>';
    }
}
```

#### AttributesInterface

Contract for objects that manage HTML attributes with an immutable API.

Methods: `attributes()`, `class()`, `getAttribute()`, `getAttributes()`, `removeAttribute()`, `setAttribute()`.

#### FormControlInterface

Composed interface extending both `RenderableInterface` and `AttributesInterface`. Use this to type form control
elements (inputs, selects, textareas, etc.) that need both rendering and attribute management.

```php
<?php

declare(strict_types=1);

use UIAwesome\Html\Contracts\Form\FormControlInterface;

function renderField(FormControlInterface $control): string
{
    return $control->class('form-control')->render();
}
```

## Documentation

For detailed configuration options and advanced usage.

- 🧪 [Testing Guide](docs/testing.md)

## Package information

[![PHP](https://img.shields.io/badge/%3E%3D8.3-777BB4.svg?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/releases/8.3/en.php)
[![Latest Stable Version](https://img.shields.io/packagist/v/ui-awesome/html-contracts.svg?style=for-the-badge&logo=packagist&logoColor=white&label=Stable)](https://packagist.org/packages/ui-awesome/html-contracts)
[![Total Downloads](https://img.shields.io/packagist/dt/ui-awesome/html-contracts.svg?style=for-the-badge&logo=composer&logoColor=white&label=Downloads)](https://packagist.org/packages/ui-awesome/html-contracts)

## Project status

[![PHPStan Level Max](https://img.shields.io/badge/PHPStan-Level%20Max-4F5D95.svg?style=for-the-badge&logo=github&logoColor=white)](https://github.com/ui-awesome/html-contracts/actions/workflows/static.yml)
[![Quality](https://img.shields.io/github/actions/workflow/status/ui-awesome/html-contracts/quality.yml?style=for-the-badge&label=Quality&logo=github)](https://github.com/ui-awesome/html-contracts/actions/workflows/quality.yml)
[![StyleCI](https://img.shields.io/badge/StyleCI-Passed-44CC11.svg?style=for-the-badge&logo=github&logoColor=white)](https://github.styleci.io/repos/ui-awesome/html-contracts?branch=main)

## Our social networks

[![Follow on X](https://img.shields.io/badge/-Follow%20on%20X-1DA1F2.svg?style=for-the-badge&logo=x&logoColor=white&labelColor=000000)](https://x.com/Terabytesoftw)
[![Follow on Facebook](https://img.shields.io/badge/-Follow%20on%20Facebook-1877F2.svg?style=for-the-badge&logo=facebook&logoColor=white&labelColor=000000)](https://www.facebook.com/wilmer.arambula.9)

## License

[![License](https://img.shields.io/badge/License-BSD--3--Clause-brightgreen.svg?style=for-the-badge&logo=opensourceinitiative&logoColor=white&labelColor=555555)](LICENSE)
