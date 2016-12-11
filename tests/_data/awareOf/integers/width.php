<?php

/**
 * Generated data provider for int width unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int width'   => [
            \Aedart\Model\Traits\Integers\WidthTrait::class,
            \Aedart\Model\Contracts\Integers\WidthAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};