<?php

/**
 * Generated data provider for int status unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int status'   => [
            \Aedart\Model\Traits\Integers\StatusTrait::class,
            \Aedart\Model\Contracts\Integers\StatusAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};