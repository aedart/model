<?php

/**
 * Generated data provider for string pattern unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string pattern'   => [
            \Aedart\Model\Traits\Strings\PatternTrait::class,
            \Aedart\Model\Contracts\Strings\PatternAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};