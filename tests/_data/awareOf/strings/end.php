<?php

/**
 * Generated data provider for string end unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string end'   => [
            \Aedart\Model\Traits\Strings\EndTrait::class,
            \Aedart\Model\Contracts\Strings\EndAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};