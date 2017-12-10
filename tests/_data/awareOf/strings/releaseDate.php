<?php

/**
 * Generated data provider for string releaseDate unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string releaseDate'   => [
            \Aedart\Model\Traits\Strings\ReleaseDateTrait::class,
            \Aedart\Model\Contracts\Strings\ReleaseDateAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};