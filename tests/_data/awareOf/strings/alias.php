<?php

/**
 * Generated data provider for string alias unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string alias'   => [
            \Aedart\Model\Traits\Strings\AliasTrait::class,
            \Aedart\Model\Contracts\Strings\AliasAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};