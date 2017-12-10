<?php

/**
 * Generated data provider for string material unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string material'   => [
            \Aedart\Model\Traits\Strings\MaterialTrait::class,
            \Aedart\Model\Contracts\Strings\MaterialAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};