<?php

/**
 * Generated data provider for string discount unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string discount'   => [
            \Aedart\Model\Traits\Strings\DiscountTrait::class,
            \Aedart\Model\Contracts\Strings\DiscountAware::class,
            (string) $faker->randomFloat() . ' ' . $faker->currencyCode,
            (string) $faker->randomFloat() . ' ' . $faker->currencyCode,
        ]
    ];
};