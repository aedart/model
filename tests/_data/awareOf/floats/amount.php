<?php

/**
 * Generated data provider for float amount unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float amount'   => [
            \Aedart\Model\Traits\Floats\AmountTrait::class,
            \Aedart\Model\Contracts\Floats\AmountAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};