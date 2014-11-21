<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 20/11/2014
 * Time: 19:47
 */

namespace OKLM\StringGenerator;

/**
 * Class LoremIpsum
 * @param OKLM\StringGenerator
 */

class LoremIpsum{

    /**
     * @var string
     */
    private static $Latin_Text = 'lorem ipsum, dolor sit amet consectetur adipiscing elit suspendisse arcu lectus, mattis a nibh at, rutrum auctor neque';


    /**
     * Construct
     */

    public function __construct(){

    }

    /**
     * @param $WordNumber
     * @return string
     */
    public static function generateMyLatin($WordNumber = 1){

        $resultat = '';

        for($i = 0 ; $i<$WordNumber ; $i++) {
            $split = preg_split("/[\s,]+/", self::$Latin_Text);
            $count = count($split)-1;
            $resultat .= $split[rand(0,$count)]." ";
        };

        return $resultat;
    }
}