<?php

/**
 * Generated data provider for int depth unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int depth'   => [
            \Aedart\Model\Traits\Integers\DepthTrait::class,
            \Aedart\Model\Contracts\Integers\DepthAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};