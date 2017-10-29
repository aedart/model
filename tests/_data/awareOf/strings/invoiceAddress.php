<?php

/**
 * Generated data provider for string invoiceAddress unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string invoiceAddress'   => [
            \Aedart\Model\Traits\Strings\InvoiceAddressTrait::class,
            \Aedart\Model\Contracts\Strings\InvoiceAddressAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};