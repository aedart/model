<?php

/**
 * Generated data provider for string longitude unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string longitude'   => [
            \Aedart\Model\Traits\Strings\LongitudeTrait::class,
            \Aedart\Model\Contracts\Strings\LongitudeAware::class,
            (string) $faker->longitude,
            (string) $faker->longitude,
        ]
    ];
};