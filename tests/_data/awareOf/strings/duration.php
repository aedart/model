<?php

/**
 * Generated data provider for string duration unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string duration'   => [
            \Aedart\Model\Traits\Strings\DurationTrait::class,
            \Aedart\Model\Contracts\Strings\DurationAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};