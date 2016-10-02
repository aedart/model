<?php

/**
 * Generated data provider for float rate unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float rate'   => [
            \Aedart\Model\Traits\Floats\RateTrait::class,
            \Aedart\Model\Contracts\Floats\RateAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};