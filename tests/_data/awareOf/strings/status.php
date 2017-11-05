<?php

/**
 * Generated data provider for string status unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string status'   => [
            \Aedart\Model\Traits\Strings\StatusTrait::class,
            \Aedart\Model\Contracts\Strings\StatusAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};