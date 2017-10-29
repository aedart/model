<?php

/**
 * Generated data provider for string prefix unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string prefix'   => [
            \Aedart\Model\Traits\Strings\PrefixTrait::class,
            \Aedart\Model\Contracts\Strings\PrefixAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};