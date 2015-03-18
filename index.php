<?php

require __DIR__.'/vendor/autoload.php';

echo \OKLM\StringGenerator\PasswordGenerator::generate(12, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_MEDIUM).'<br>';

echo \OKLM\StringGenerator\LoremIpsum::generateMyLatin(10);
