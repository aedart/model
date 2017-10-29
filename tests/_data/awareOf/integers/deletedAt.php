<?php

/**
 * Generated data provider for int deletedAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int deletedAt'   => [
            \Aedart\Model\Traits\Integers\DeletedAtTrait::class,
            \Aedart\Model\Contracts\Integers\DeletedAtAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};