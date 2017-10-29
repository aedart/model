<?php

/**
 * Generated data provider for array tags unit test
 */
return function(\Faker\Generator $faker){
    return [
        'array tags'   => [
            \Aedart\Model\Traits\Arrays\TagsTrait::class,
            \Aedart\Model\Contracts\Arrays\TagsAware::class,
            $faker->words($faker->randomDigitNotNull),
            $faker->words($faker->randomDigitNotNull),
        ]
    ];
};