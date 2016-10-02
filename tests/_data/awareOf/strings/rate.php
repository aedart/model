<?php

/**
 * Generated data provider for string rate unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string rate'   => [
            \Aedart\Model\Traits\Strings\RateTrait::class,
            \Aedart\Model\Contracts\Strings\RateAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};