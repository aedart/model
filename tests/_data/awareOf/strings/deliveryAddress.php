<?php

/**
 * Generated data provider for string deliveryAddress unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string deliveryAddress'   => [
            \Aedart\Model\Traits\Strings\DeliveryAddressTrait::class,
            \Aedart\Model\Contracts\Strings\DeliveryAddressAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};