<?php

/**
 * Generated data provider for string category unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string category'   => [
            \Aedart\Model\Traits\Strings\CategoryTrait::class,
            \Aedart\Model\Contracts\Strings\CategoryAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};