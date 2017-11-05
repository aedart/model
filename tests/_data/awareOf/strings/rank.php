<?php

/**
 * Generated data provider for string rank unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string rank'   => [
            \Aedart\Model\Traits\Strings\RankTrait::class,
            \Aedart\Model\Contracts\Strings\RankAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};