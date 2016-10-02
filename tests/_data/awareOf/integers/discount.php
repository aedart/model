<?php

/**
 * Generated data provider for int discount unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int discount'   => [
            \Aedart\Model\Traits\Integers\DiscountTrait::class,
            \Aedart\Model\Contract\Integers\DiscountAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};