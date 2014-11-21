# StringGenerator

This lib can generate string like password or Lorem Ipsum.

## Password

This is the lib password part.

```php
require __DIR__.'/vendor/autoload.php';

echo \OKLM\StringGenerator\PasswordGenerator::generate(arg_a,arg_b);
```

arg_a -> Choose the password's length.

arg_b -> Choose the pasword's difficulty within 3 level.

## Lorem Ipsum

This is the lib Lorem Ipsum part.

```php
require __DIR__.'/vendor/autoload.php';

echo \OKLM\StringGenerator\LoremIpsum::generateMyLatin(arg_c);
```

arg_c -> Put the word's number hoped.