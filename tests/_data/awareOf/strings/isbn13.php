<?php

/**
 * Generated data provider for string isbn13 unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string isbn13'   => [
            \Aedart\Model\Traits\Strings\Isbn13Trait::class,
            \Aedart\Model\Contracts\Strings\Isbn13Aware::class,
            $faker->isbn13,
            $faker->isbn13,
        ]
    ];
};