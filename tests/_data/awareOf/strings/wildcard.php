<?php

/**
 * Generated data provider for string wildcard unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string wildcard'   => [
            \Aedart\Model\Traits\Strings\WildcardTrait::class,
            \Aedart\Model\Contracts\Strings\WildcardAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};