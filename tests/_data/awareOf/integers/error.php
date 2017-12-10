<?php

/**
 * Generated data provider for int error unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int error'   => [
            \Aedart\Model\Traits\Integers\ErrorTrait::class,
            \Aedart\Model\Contracts\Integers\ErrorAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};