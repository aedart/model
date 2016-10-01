<?php

/**
 * Generated data provider for int id unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int id'   => [
            \Aedart\Model\Traits\Integers\IdTrait::class,
            \Aedart\Model\Contracts\Integers\IdAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};