<?php

/**
 * Generated data provider for string sql unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string sql'   => [
            \Aedart\Model\Traits\Strings\SqlTrait::class,
            \Aedart\Model\Contracts\Strings\SqlAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};