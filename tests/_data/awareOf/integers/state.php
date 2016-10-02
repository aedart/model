<?php

/**
 * Generated data provider for int state unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int state'   => [
            \Aedart\Model\Traits\Integers\StateTrait::class,
            \Aedart\Model\Contracts\Integers\StateAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};