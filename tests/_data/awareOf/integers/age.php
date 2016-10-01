<?php

/**
 * Generated data provider for int age unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int age'   => [
            \Aedart\Model\Traits\Integers\AgeTrait::class,
            \Aedart\Model\Contracts\Integers\AgeAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};