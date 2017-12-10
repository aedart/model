<?php

/**
 * Generated data provider for int purchaseDate unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int purchaseDate'   => [
            \Aedart\Model\Traits\Integers\PurchaseDateTrait::class,
            \Aedart\Model\Contracts\Integers\PurchaseDateAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};