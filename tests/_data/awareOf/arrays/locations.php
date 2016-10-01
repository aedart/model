<?php

/**
 * Generated data provider for string[] locations unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string[] locations'   => [
            \Aedart\Model\Traits\Arrays\LocationsTrait::class,
            \Aedart\Model\Contracts\Arrays\LocationsAware::class,
            $faker->words($faker->randomDigitNotNull),
            $faker->words($faker->randomDigitNotNull),
        ]
    ];
};