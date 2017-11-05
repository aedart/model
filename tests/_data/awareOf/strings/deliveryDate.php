<?php

/**
 * Generated data provider for string deliveryDate unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string deliveryDate'   => [
            \Aedart\Model\Traits\Strings\DeliveryDateTrait::class,
            \Aedart\Model\Contracts\Strings\DeliveryDateAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};