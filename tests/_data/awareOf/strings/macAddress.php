<?php

/**
 * Generated data provider for string macAddress unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string macAddress'   => [
            \Aedart\Model\Traits\Strings\MacAddressTrait::class,
            \Aedart\Model\Contracts\Strings\MacAddressAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};