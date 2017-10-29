<?php

/**
 * Generated data provider for int createdAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int createdAt'   => [
            \Aedart\Model\Traits\Integers\CreatedAtTrait::class,
            \Aedart\Model\Contracts\Integers\CreatedAtAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};