<?php

/**
 * Generated data provider for int releaseDate unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int releaseDate'   => [
            \Aedart\Model\Traits\Integers\ReleaseDateTrait::class,
            \Aedart\Model\Contracts\Integers\ReleaseDateAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};