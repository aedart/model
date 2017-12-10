<?php

/**
 * Generated data provider for int weight unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int weight'   => [
            \Aedart\Model\Traits\Integers\WeightTrait::class,
            \Aedart\Model\Contracts\Integers\WeightAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};