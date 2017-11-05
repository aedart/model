<?php

/**
 * Generated data provider for int brand unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int brand'   => [
            \Aedart\Model\Traits\Integers\BrandTrait::class,
            \Aedart\Model\Contracts\Integers\BrandAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};