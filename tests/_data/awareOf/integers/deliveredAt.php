<?php

/**
 * Generated data provider for int deliveredAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int deliveredAt'   => [
            \Aedart\Model\Traits\Integers\DeliveredAtTrait::class,
            \Aedart\Model\Contracts\Integers\DeliveredAtAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};