<?php

/**
 * Generated data provider for float x unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float x'   => [
            \Aedart\Model\Traits\Floats\XTrait::class,
            \Aedart\Model\Contracts\Floats\XAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};