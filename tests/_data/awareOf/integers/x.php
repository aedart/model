<?php

/**
 * Generated data provider for int x unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int x'   => [
            \Aedart\Model\Traits\Integers\XTrait::class,
            \Aedart\Model\Contracts\Integers\XAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};