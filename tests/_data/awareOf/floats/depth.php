<?php

/**
 * Generated data provider for float depth unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float depth'   => [
            \Aedart\Model\Traits\Floats\DepthTrait::class,
            \Aedart\Model\Contracts\Floats\DepthAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};