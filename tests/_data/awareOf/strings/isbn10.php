<?php

/**
 * Generated data provider for string isbn10 unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string isbn10'   => [
            \Aedart\Model\Traits\Strings\Isbn10Trait::class,
            \Aedart\Model\Contracts\Strings\Isbn10Aware::class,
            $faker->isbn10,
            $faker->isbn10,
        ]
    ];
};