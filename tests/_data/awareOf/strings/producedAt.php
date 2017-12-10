<?php

/**
 * Generated data provider for string producedAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string producedAt'   => [
            \Aedart\Model\Traits\Strings\ProducedAtTrait::class,
            \Aedart\Model\Contracts\Strings\ProducedAtAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};