<?php

/**
 * Generated data provider for string event unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string event'   => [
            \Aedart\Model\Traits\Strings\EventTrait::class,
            \Aedart\Model\Contracts\Strings\EventAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};