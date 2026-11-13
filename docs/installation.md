# Installation

HTML Contracts requires PHP 8.3 or newer and is independent of Yii or any other framework.

```bash
composer require ui-awesome/html-contracts:^0.2
```

Load the application's Composer autoloader, then use interfaces from `UIAwesome\Html\Contracts` to type or implement
HTML components. This package contains interfaces only: it does not create tags, render forms, or install frontend
assets. Select a compatible concrete implementation separately.

The guide follows the current source. Verify the installed interface declarations and implementing package together;
optional capabilities in development may not exist in every release allowed by `^0.2`.

See [implementation examples](examples.md), [validation commands](testing.md), and [AI assistance](agents.md).
