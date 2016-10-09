<?php

/**
 * Generated data provider for int row unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int row'   => [
            \Aedart\Model\Traits\Integers\RowTrait::class,
            \Aedart\Model\Contracts\Integers\RowAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};