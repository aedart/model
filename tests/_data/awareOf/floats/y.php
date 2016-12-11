<?php

/**
 * Generated data provider for float y unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float y'   => [
            \Aedart\Model\Traits\Floats\YTrait::class,
            \Aedart\Model\Contracts\Floats\YAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};