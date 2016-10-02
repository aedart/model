<?php

/**
 * Generated data provider for int price unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int price'   => [
            \Aedart\Model\Traits\Integers\PriceTrait::class,
            \Aedart\Model\Contracts\Integers\PriceAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};