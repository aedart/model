<?php

/**
 * Generated data provider for array categories unit test
 */
return function(\Faker\Generator $faker){
    return [
        'array categories'   => [
            \Aedart\Model\Traits\Arrays\CategoriesTrait::class,
            \Aedart\Model\Contracts\Arrays\CategoriesAware::class,
            $faker->words($faker->randomDigitNotNull),
            $faker->words($faker->randomDigitNotNull),
        ]
    ];
};