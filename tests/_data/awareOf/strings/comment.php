<?php

/**
 * Generated data provider for string comment unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string comment'   => [
            \Aedart\Model\Traits\Strings\CommentTrait::class,
            \Aedart\Model\Contracts\Strings\CommentAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};