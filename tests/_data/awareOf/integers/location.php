<?php

/**
 * Generated data provider for int location unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int location'   => [
            \Aedart\Model\Traits\Integers\LocationTrait::class,
            \Aedart\Model\Contracts\Integers\LocationAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};