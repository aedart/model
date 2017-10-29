<?php

/**
 * Generated data provider for string country unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string country'   => [
            \Aedart\Model\Traits\Strings\CountryTrait::class,
            \Aedart\Model\Contracts\Strings\CountryAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};