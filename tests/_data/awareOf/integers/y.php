<?php

/**
 * Generated data provider for int y unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int y'   => [
            \Aedart\Model\Traits\Integers\YTrait::class,
            \Aedart\Model\Contracts\Integers\YAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};