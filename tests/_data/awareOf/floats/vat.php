<?php

/**
 * Generated data provider for float vat unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float vat'   => [
            \Aedart\Model\Traits\Floats\VatTrait::class,
            \Aedart\Model\Contracts\Floats\VatAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};