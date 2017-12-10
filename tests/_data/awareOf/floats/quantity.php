<?php

/**
 * Generated data provider for float quantity unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float quantity'   => [
            \Aedart\Model\Traits\Floats\QuantityTrait::class,
            \Aedart\Model\Contracts\Floats\QuantityAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};