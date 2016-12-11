<?php

/**
 * Generated data provider for float height unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float height'   => [
            \Aedart\Model\Traits\Floats\HeightTrait::class,
            \Aedart\Model\Contracts\Floats\HeightAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};