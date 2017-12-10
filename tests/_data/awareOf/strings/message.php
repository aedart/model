<?php

/**
 * Generated data provider for string message unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string message'   => [
            \Aedart\Model\Traits\Strings\MessageTrait::class,
            \Aedart\Model\Contracts\Strings\MessageAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};