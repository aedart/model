<?php

/**
 * Generated data provider for int updatedAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int updatedAt'   => [
            \Aedart\Model\Traits\Integers\UpdatedAtTrait::class,
            \Aedart\Model\Contracts\Integers\UpdatedAtAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};