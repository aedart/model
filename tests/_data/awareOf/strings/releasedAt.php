<?php

/**
 * Generated data provider for string releasedAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string releasedAt'   => [
            \Aedart\Model\Traits\Strings\ReleasedAtTrait::class,
            \Aedart\Model\Contracts\Strings\ReleasedAtAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};