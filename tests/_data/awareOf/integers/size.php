<?php

/**
 * Generated data provider for int size unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int size'   => [
            \Aedart\Model\Traits\Integers\SizeTrait::class,
            \Aedart\Model\Contracts\Integers\SizeAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};