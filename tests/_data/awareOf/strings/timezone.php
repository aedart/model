<?php

/**
 * Generated data provider for string timezone unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string timezone'   => [
            \Aedart\Model\Traits\Strings\TimezoneTrait::class,
            \Aedart\Model\Contracts\Strings\TimezoneAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};