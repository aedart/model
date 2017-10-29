<?php

/**
 * Generated data provider for string birthdate unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string birthdate'   => [
            \Aedart\Model\Traits\Strings\BirthdateTrait::class,
            \Aedart\Model\Contracts\Strings\BirthdateAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};