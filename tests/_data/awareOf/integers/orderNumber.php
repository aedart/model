<?php

/**
 * Generated data provider for int orderNumber unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int orderNumber'   => [
            \Aedart\Model\Traits\Integers\OrderNumberTrait::class,
            \Aedart\Model\Contracts\Integers\OrderNumberAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};