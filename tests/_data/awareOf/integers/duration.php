<?php

/**
 * Generated data provider for int duration unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int duration'   => [
            \Aedart\Model\Traits\Integers\DurationTrait::class,
            \Aedart\Model\Contracts\Integers\DurationAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};