<?php

namespace OKLM\StringGenerator;

/**
* Class PasswordGenerator
*
* @package OKLM\StringGenerator
*/

class PasswordGenerator
{
	const PASSWORD_EASY    = 0;
	const PASSWORD_MEDIUM  = 1;
	const PASSWORD_HARD    = 2;

    /**
    * @var string
    */
	private static $charStrengthEasy = 'abcdefghijklmnopqrstuvwxyz';

    /**
    * @var string
    */
	private static $charStrengthMedium = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    /**
    * @var string
    */
	private static $charStrengthHard = '$€£%!@&éè';

    /**
    * Constructor
    */
    public function __construct()
    {
    }

    public static function generate($limit = 10, $difficulty = self::PASSWORD_EASY)
    {

        $letter='';

        if (!in_array($letter,[
            self::PASSWORD_EASY,
            self::PASSWORD_MEDIUM,
            self::PASSWORD_HARD,
            ])) {
                throw new Exception("Invalid letter");
            }

    	switch ($difficulty) {
    		case self::PASSWORD_MEDIUM:
    			$letter = self::$charStrengthMedium.self::$charStrengthEasy;
    			break;

    		case self::PASSWORD_HARD:
    			$letter = self::$charStrengthHard.self::$charStrengthMedium.self::$charStrengthEasy;
    			break;

    		default:
    			$letter = self::$charStrengthEasy;
    			break;
    	}

	    $pass_result = '';
	    for ($i = 0; $i < $limit; $i++) {
	        $pass_result .= mb_substr($letter, mt_rand(0, mb_strlen($letter)-1), 1);
	    }
	    return $pass_result;
    }
}