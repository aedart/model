<?php

/**
 * Generated data provider for string profile unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string profile'   => [
            \Aedart\Model\Traits\Strings\ProfileTrait::class,
            \Aedart\Model\Contracts\Strings\ProfileAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};