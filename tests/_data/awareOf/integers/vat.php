<?php

/**
 * Generated data provider for int vat unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int vat'   => [
            \Aedart\Model\Traits\Integers\VatTrait::class,
            \Aedart\Model\Contracts\Integers\VatAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};