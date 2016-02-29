<?php
/**
 * @package   ImpressPages
 */


/**
 * Created by PhpStorm.
 * User: maskas
 * Date: 16.2.28
 * Time: 23.36
 */

namespace Plugin\DoctrineExample;


class Helper
{
    protected static $adjectives = [
        'Electric',
        'Auto',
        'Super',
        'Amaizing',
        'Bad',
        'Horrible',
        'Slim',
        'Thick',
        'Curly',
        'Light',
        'Heavy',
        'Warm',
        'Dirty',
        'Large'
    ];

    protected static $nouns = [
        'shirt',
        'bluse',
        'pants',
        'hat',
        'mouse',
        'keyboard',
        'TV',
        'carpet',
        'HDD',
        'lightbulb',
        'food',
        'milk',
        'microwave',
        'shoes',
        'hair',
        'something',
        'pen',
        'lamp'
    ];
    public static function getRandomTitle()
    {
        return self::$adjectives[array_rand(self::$adjectives)] . ' ' . self::$nouns[array_rand(self::$nouns)];
    }

}
