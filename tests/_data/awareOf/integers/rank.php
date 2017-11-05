<?php

/**
 * Generated data provider for int rank unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int rank'   => [
            \Aedart\Model\Traits\Integers\RankTrait::class,
            \Aedart\Model\Contracts\Integers\RankAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};