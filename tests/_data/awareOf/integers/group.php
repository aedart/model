<?php

/**
 * Generated data provider for int group unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int group'   => [
            \Aedart\Model\Traits\Integers\GroupTrait::class,
            \Aedart\Model\Contracts\Integers\GroupAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};