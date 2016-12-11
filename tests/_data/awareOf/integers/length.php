<?php

/**
 * Generated data provider for int length unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int length'   => [
            \Aedart\Model\Traits\Integers\LengthTrait::class,
            \Aedart\Model\Contracts\Integers\LengthAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};