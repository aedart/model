<?php

/**
 * Generated data provider for string address unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string address'   => [
            \Aedart\Model\Traits\Strings\AddressTrait::class,
            \Aedart\Model\Contracts\Strings\AddressAware::class,
            $faker->address,
            $faker->address,
        ]
    ];
};