<?php

/**
 * Generated data provider for int rating unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int rating'   => [
            \Aedart\Model\Traits\Integers\RatingTrait::class,
            \Aedart\Model\Contracts\Integers\RatingAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};