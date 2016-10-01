<?php

/**
 * Generated data provider for string topic unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string topic'   => [
            \Aedart\Model\Traits\Strings\TopicTrait::class,
            \Aedart\Model\Contracts\Strings\TopicAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};