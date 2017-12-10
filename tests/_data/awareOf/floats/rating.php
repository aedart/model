<?php

/**
 * Generated data provider for float rating unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float rating'   => [
            \Aedart\Model\Traits\Floats\RatingTrait::class,
            \Aedart\Model\Contracts\Floats\RatingAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};