<?php

/**
 * Generated data provider for float z unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float z'   => [
            \Aedart\Model\Traits\Floats\ZTrait::class,
            \Aedart\Model\Contracts\Floats\ZAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};