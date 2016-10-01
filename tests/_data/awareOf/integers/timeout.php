<?php

/**
 * Generated data provider for int timeout unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int timeout'   => [
            \Aedart\Model\Traits\Integers\TimeoutTrait::class,
            \Aedart\Model\Contracts\Integers\TimeoutAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};