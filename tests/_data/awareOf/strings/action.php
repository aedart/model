<?php

/**
 * Generated data provider for string action unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string action'   => [
            \Aedart\Model\Traits\Strings\ActionTrait::class,
            \Aedart\Model\Contracts\Strings\ActionAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};