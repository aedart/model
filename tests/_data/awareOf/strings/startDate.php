<?php

/**
 * Generated data provider for string startDate unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string startDate'   => [
            \Aedart\Model\Traits\Strings\StartDateTrait::class,
            \Aedart\Model\Contracts\Strings\StartDateAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};