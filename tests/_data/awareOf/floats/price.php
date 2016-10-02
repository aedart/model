<?php

/**
 * Generated data provider for float price unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float price'   => [
            \Aedart\Model\Traits\Floats\PriceTrait::class,
            \Aedart\Model\Contracts\Floats\PriceAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};