<?php

/**
 * Generated data provider for float duration unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float duration'   => [
            \Aedart\Model\Traits\Floats\DurationTrait::class,
            \Aedart\Model\Contracts\Floats\DurationAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};