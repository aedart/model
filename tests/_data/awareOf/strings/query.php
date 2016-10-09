<?php

/**
 * Generated data provider for string query unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string query'   => [
            \Aedart\Model\Traits\Strings\QueryTrait::class,
            \Aedart\Model\Contracts\Strings\QueryAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};