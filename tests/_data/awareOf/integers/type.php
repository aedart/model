<?php

/**
 * Generated data provider for int type unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int type'   => [
            \Aedart\Model\Traits\Integers\TypeTrait::class,
            \Aedart\Model\Contracts\Integers\TypeAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};