<?php

/**
 * Generated data provider for int method unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int method'   => [
            \Aedart\Model\Traits\Integers\MethodTrait::class,
            \Aedart\Model\Contracts\Integers\MethodAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};