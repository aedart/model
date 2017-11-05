<?php

/**
 * Generated data provider for int date unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int date'   => [
            \Aedart\Model\Traits\Integers\DateTrait::class,
            \Aedart\Model\Contracts\Integers\DateAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};