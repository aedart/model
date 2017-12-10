<?php

/**
 * Generated data provider for string rating unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string rating'   => [
            \Aedart\Model\Traits\Strings\RatingTrait::class,
            \Aedart\Model\Contracts\Strings\RatingAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};