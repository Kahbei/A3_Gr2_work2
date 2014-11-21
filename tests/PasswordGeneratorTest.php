<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 21/11/2014
 * Time: 15:39
 */

namespace Tests\OKLM\StringGenerator;

use OKLM\StringGenerator\PasswordGenerator;

class PasswordGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Generate a number randomly and test if it's worked.
     *
     * @throws \Exception
     */
    public function testGenerateLength()
    {
        $length = mt_rand(10,100);
        $password = PasswordGenerator::generate($length, PasswordGenerator::PASSWORD_HARD);
        $passwordLength = mb_strlen($password);
        $this->assertEquals($length,$passwordLength);
    }
} 