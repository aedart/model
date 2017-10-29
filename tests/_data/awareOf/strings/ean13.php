<?php

/**
 * Generated data provider for string ean13 unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string ean13'   => [
            \Aedart\Model\Traits\Strings\Ean13Trait::class,
            \Aedart\Model\Contracts\Strings\Ean13Aware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};