<?php

/**
 * Generated data provider for int height unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int height'   => [
            \Aedart\Model\Traits\Integers\HeightTrait::class,
            \Aedart\Model\Contracts\Integers\HeightAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};