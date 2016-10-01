<?php

/**
 * Generated data provider for string question unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string question'   => [
            \Aedart\Model\Traits\Strings\QuestionTrait::class,
            \Aedart\Model\Contracts\Strings\QuestionAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};