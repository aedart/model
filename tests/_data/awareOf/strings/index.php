<?php

/**
 * Generated data provider for string index unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string index'   => [
            \Aedart\Model\Traits\Strings\IndexTrait::class,
            \Aedart\Model\Contracts\Strings\IndexAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};