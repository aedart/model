<?php

/**
 * Generated data provider for string[] categories unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string[] categories'   => [
            \Aedart\Model\Traits\Arrays\CategoriesTrait::class,
            \Aedart\Model\Contracts\Arrays\CategoriesAware::class,
            $faker->words($faker->randomDigitNotNull),
            $faker->words($faker->randomDigitNotNull),
        ]
    ];
};