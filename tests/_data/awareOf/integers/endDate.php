<?php

/**
 * Generated data provider for int endDate unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int endDate'   => [
            \Aedart\Model\Traits\Integers\EndDateTrait::class,
            \Aedart\Model\Contracts\Integers\EndDateAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};