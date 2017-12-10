<?php

/**
 * Generated data provider for int releasedAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int releasedAt'   => [
            \Aedart\Model\Traits\Integers\ReleasedAtTrait::class,
            \Aedart\Model\Contracts\Integers\ReleasedAtAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};