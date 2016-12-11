<?php

/**
 * Generated data provider for int z unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int z'   => [
            \Aedart\Model\Traits\Integers\ZTrait::class,
            \Aedart\Model\Contracts\Integers\ZAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};