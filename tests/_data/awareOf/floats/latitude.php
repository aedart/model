<?php

/**
 * Generated data provider for float latitude unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float latitude'   => [
            \Aedart\Model\Traits\Floats\LatitudeTrait::class,
            \Aedart\Model\Contracts\Floats\LatitudeAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};