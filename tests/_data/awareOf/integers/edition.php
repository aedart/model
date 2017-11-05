<?php

/**
 * Generated data provider for int edition unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int edition'   => [
            \Aedart\Model\Traits\Integers\EditionTrait::class,
            \Aedart\Model\Contracts\Integers\EditionAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};