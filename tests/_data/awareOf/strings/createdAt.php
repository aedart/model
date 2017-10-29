<?php

/**
 * Generated data provider for string createdAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string createdAt'   => [
            \Aedart\Model\Traits\Strings\CreatedAtTrait::class,
            \Aedart\Model\Contracts\Strings\CreatedAtAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};