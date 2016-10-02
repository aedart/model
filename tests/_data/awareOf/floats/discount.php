<?php

/**
 * Generated data provider for float discount unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float discount'   => [
            \Aedart\Model\Traits\Floats\DiscountTrait::class,
            \Aedart\Model\Contracts\Floats\DiscountAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};