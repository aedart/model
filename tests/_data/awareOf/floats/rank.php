<?php

/**
 * Generated data provider for float rank unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float rank'   => [
            \Aedart\Model\Traits\Floats\RankTrait::class,
            \Aedart\Model\Contracts\Floats\RankAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};