<?php

/**
 * Generated data provider for string currency unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string currency'   => [
            \Aedart\Model\Traits\Strings\CurrencyTrait::class,
            \Aedart\Model\Contracts\Strings\CurrencyAware::class,
            $faker->currencyCode,
            $faker->currencyCode,
        ]
    ];
};