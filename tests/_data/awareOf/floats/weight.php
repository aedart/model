<?php

/**
 * Generated data provider for float weight unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float weight'   => [
            \Aedart\Model\Traits\Floats\WeightTrait::class,
            \Aedart\Model\Contracts\Floats\WeightAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};