<?php

require __DIR__.'/vendor/autoload.php';

/*spl_autoload_register(function($name){
    $file = $name.'.php';
    if(is_file($file))
        include $file;
});*/

//$slugify = new \Cocur\Slugify\Slugify();

//echo $slugify->slugify('Mé àré azskj dz ak azd HJVJV');

echo \OKLM\StringGenerator\PasswordGenerator::generate(12, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_MEDIUM);