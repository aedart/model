<?php

/**
 * Generated data provider for string agent unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string agent'   => [
            \Aedart\Model\Traits\Strings\AgentTrait::class,
            \Aedart\Model\Contracts\Strings\AgentAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};