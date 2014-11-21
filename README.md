# StringGenerator

This lib can generate string like password or Lorem Ipsum.

## Pasword

This lib generates password.

```php
require __DIR__.'/vendor/autoload.php';

echo \OKLM\StringGenerator\PasswordGenerator::generate(12, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_MEDIUM);
```

