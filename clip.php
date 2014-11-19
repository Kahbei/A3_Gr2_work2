#!/usr/bin/env/ php

<?php

$limit = (isset($argv[1]) && (int)$argv[1] > 0) ? (int)$argv[1] : mt_rand(20,30);

$letter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789$€£%!@&éè';

$pass_result = '';

for ($i = 0; $i < $limit; $i++) {
	$pass_result .= mb_substr($letter, mt_rand(0, mb_strlen($letter)-1), 1);
}

echo $pass_result;