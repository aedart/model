<?php

/**
 * Generated data provider for string json unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string json'   => [
            \Aedart\Model\Traits\Strings\JsonTrait::class,
            \Aedart\Model\Contracts\Strings\JsonAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};