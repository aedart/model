<?php

/**
 * Generated data provider for string begin unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string begin'   => [
            \Aedart\Model\Traits\Strings\BeginTrait::class,
            \Aedart\Model\Contracts\Strings\BeginAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};