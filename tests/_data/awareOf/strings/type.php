<?php

/**
 * Generated data provider for string type unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string type'   => [
            \Aedart\Model\Traits\Strings\TypeTrait::class,
            \Aedart\Model\Contracts\Strings\TypeAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};