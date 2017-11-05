<?php

/**
 * Generated data provider for int deliveryDate unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int deliveryDate'   => [
            \Aedart\Model\Traits\Integers\DeliveryDateTrait::class,
            \Aedart\Model\Contracts\Integers\DeliveryDateAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};