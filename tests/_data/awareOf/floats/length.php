<?php

/**
 * Generated data provider for float length unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float length'   => [
            \Aedart\Model\Traits\Floats\LengthTrait::class,
            \Aedart\Model\Contracts\Floats\LengthAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};