<?php

/**
 * Generated data provider for string state unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string state'   => [
            \Aedart\Model\Traits\Strings\StateTrait::class,
            \Aedart\Model\Contracts\Strings\StateAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};