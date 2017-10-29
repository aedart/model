<?php

/**
 * Generated data provider for string expiresAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string expiresAt'   => [
            \Aedart\Model\Traits\Strings\ExpiresAtTrait::class,
            \Aedart\Model\Contracts\Strings\ExpiresAtAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};