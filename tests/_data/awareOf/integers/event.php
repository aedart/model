<?php

/**
 * Generated data provider for int event unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int event'   => [
            \Aedart\Model\Traits\Integers\EventTrait::class,
            \Aedart\Model\Contracts\Integers\EventAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};