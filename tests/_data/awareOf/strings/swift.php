<?php

/**
 * Generated data provider for string swift unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string swift'   => [
            \Aedart\Model\Traits\Strings\SwiftTrait::class,
            \Aedart\Model\Contracts\Strings\SwiftAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};