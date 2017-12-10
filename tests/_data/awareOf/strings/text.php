<?php

/**
 * Generated data provider for string text unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string text'   => [
            \Aedart\Model\Traits\Strings\TextTrait::class,
            \Aedart\Model\Contracts\Strings\TextAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};