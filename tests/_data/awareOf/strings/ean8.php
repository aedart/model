<?php

/**
 * Generated data provider for string ean8 unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string ean8'   => [
            \Aedart\Model\Traits\Strings\Ean8Trait::class,
            \Aedart\Model\Contracts\Strings\Ean8Aware::class,
            $faker->ean8,
            $faker->ean8,
        ]
    ];
};