<?php

/**
 * Generated data provider for array choices unit test
 */
return function(\Faker\Generator $faker){
    return [
        'array choices'   => [
            \Aedart\Model\Traits\Arrays\ChoicesTrait::class,
            \Aedart\Model\Contracts\Arrays\ChoicesAware::class,
            $faker->words($faker->randomDigitNotNull),
            $faker->words($faker->randomDigitNotNull),
        ]
    ];
};