<?php

/**
 * Generated data provider for int distance unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int distance'   => [
            \Aedart\Model\Traits\Integers\DistanceTrait::class,
            \Aedart\Model\Contracts\Integers\DistanceAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};