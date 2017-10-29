<?php

/**
 * Generated data provider for int birthdate unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int birthdate'   => [
            \Aedart\Model\Traits\Integers\BirthdateTrait::class,
            \Aedart\Model\Contracts\Integers\BirthdateAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};