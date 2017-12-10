<?php

/**
 * Generated data provider for int producedAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int producedAt'   => [
            \Aedart\Model\Traits\Integers\ProducedAtTrait::class,
            \Aedart\Model\Contracts\Integers\ProducedAtAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};