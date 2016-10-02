<?php

/**
 * Generated data provider for int rate unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int rate'   => [
            \Aedart\Model\Traits\Integers\RateTrait::class,
            \Aedart\Model\Contracts\Integers\RateAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};