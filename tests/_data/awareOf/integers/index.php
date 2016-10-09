<?php

/**
 * Generated data provider for int index unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int index'   => [
            \Aedart\Model\Traits\Integers\IndexTrait::class,
            \Aedart\Model\Contracts\Integers\IndexAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};