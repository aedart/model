<?php

/**
 * Generated data provider for string vat unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string vat'   => [
            \Aedart\Model\Traits\Strings\VatTrait::class,
            \Aedart\Model\Contracts\Strings\VatAware::class,
            (string) $faker->randomFloat() . ' ' . $faker->currencyCode,
            (string) $faker->randomFloat() . ' ' . $faker->currencyCode,
        ]
    ];
};