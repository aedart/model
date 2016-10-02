<?php

/**
 * Generated data provider for string city unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string city'   => [
            \Aedart\Model\Traits\Strings\CityTrait::class,
            \Aedart\Model\Contracts\Strings\CityAware::class,
            $faker->city,
            $faker->city,
        ]
    ];
};