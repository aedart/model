<?php

/**
 * Generated data provider for array locations unit test
 */
return function(\Faker\Generator $faker){
    return [
        'array locations'   => [
            \Aedart\Model\Traits\Arrays\LocationsTrait::class,
            \Aedart\Model\Contracts\Arrays\LocationsAware::class,
            $faker->words($faker->randomDigitNotNull),
            $faker->words($faker->randomDigitNotNull),
        ]
    ];
};