<?php

/**
 * Generated data provider for int purchasedAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int purchasedAt'   => [
            \Aedart\Model\Traits\Integers\PurchasedAtTrait::class,
            \Aedart\Model\Contracts\Integers\PurchasedAtAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};