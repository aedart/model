<?php

/**
 * Generated data provider for string iban unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string iban'   => [
            \Aedart\Model\Traits\Strings\IbanTrait::class,
            \Aedart\Model\Contracts\Strings\IbanAware::class,
            $faker->iban($faker->countryCode),
            $faker->iban($faker->countryCode),
        ]
    ];
};