<?php

/**
 * Generated data provider for string author unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string author'   => [
            \Aedart\Model\Traits\Strings\AuthorTrait::class,
            \Aedart\Model\Contracts\Strings\AuthorAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};