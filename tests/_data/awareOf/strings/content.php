<?php

/**
 * Generated data provider for string content unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string content'   => [
            \Aedart\Model\Traits\Strings\ContentTrait::class,
            \Aedart\Model\Contracts\Strings\ContentAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};