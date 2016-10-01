<?php

/**
 * Generated data provider for array data unit test
 */
return function(\Faker\Generator $faker){
    return [
        'array data'   => [
            \Aedart\Model\Traits\Arrays\DataTrait::class,
            \Aedart\Model\Contracts\Arrays\DataAware::class,
            $faker->words($faker->randomDigitNotNull),
            $faker->words($faker->randomDigitNotNull),
        ]
    ];
};