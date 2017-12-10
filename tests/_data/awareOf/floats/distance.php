<?php

/**
 * Generated data provider for float distance unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float distance'   => [
            \Aedart\Model\Traits\Floats\DistanceTrait::class,
            \Aedart\Model\Contracts\Floats\DistanceAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};