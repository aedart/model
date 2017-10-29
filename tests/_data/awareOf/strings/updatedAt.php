<?php

/**
 * Generated data provider for string updatedAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string updatedAt'   => [
            \Aedart\Model\Traits\Strings\UpdatedAtTrait::class,
            \Aedart\Model\Contracts\Strings\UpdatedAtAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};