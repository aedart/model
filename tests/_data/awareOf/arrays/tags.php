<?php

/**
 * Generated data provider for string[] tags unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string[] tags'   => [
            \Aedart\Model\Traits\Arrays\TagsTrait::class,
            \Aedart\Model\Contracts\Arrays\TagsAware::class,
            $faker->words($faker->randomDigitNotNull),
            $faker->words($faker->randomDigitNotNull),
        ]
    ];
};