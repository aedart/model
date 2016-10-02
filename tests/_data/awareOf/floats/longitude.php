<?php

/**
 * Generated data provider for float longitude unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float longitude'   => [
            \Aedart\Model\Traits\Floats\LongitudeTrait::class,
            \Aedart\Model\Contracts\Floats\LongitudeAware::class,
            $faker->longitude,
            $faker->longitude,
        ]
    ];
};