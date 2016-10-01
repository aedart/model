<?php

/**
 * Generated data provider for string slug unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string slug'   => [
            \Aedart\Model\Traits\Strings\SlugTrait::class,
            \Aedart\Model\Contracts\Strings\SlugAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};