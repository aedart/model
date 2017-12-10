<?php

/**
 * Generated data provider for int amount unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int amount'   => [
            \Aedart\Model\Traits\Integers\AmountTrait::class,
            \Aedart\Model\Contracts\Integers\AmountAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};