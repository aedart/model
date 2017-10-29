<?php

/**
 * Generated data provider for string key unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string key'   => [
            \Aedart\Model\Traits\Strings\KeyTrait::class,
            \Aedart\Model\Contracts\Strings\KeyAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};