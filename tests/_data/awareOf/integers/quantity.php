<?php

/**
 * Generated data provider for int quantity unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int quantity'   => [
            \Aedart\Model\Traits\Integers\QuantityTrait::class,
            \Aedart\Model\Contracts\Integers\QuantityAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};