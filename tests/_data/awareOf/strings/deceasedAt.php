<?php

/**
 * Generated data provider for string deceasedAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string deceasedAt'   => [
            \Aedart\Model\Traits\Strings\DeceasedAtTrait::class,
            \Aedart\Model\Contracts\Strings\DeceasedAtAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};