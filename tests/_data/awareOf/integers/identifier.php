<?php

/**
 * Generated data provider for int identifier unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int identifier'   => [
            \Aedart\Model\Traits\Integers\IdentifierTrait::class,
            \Aedart\Model\Contracts\Integers\IdentifierAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};