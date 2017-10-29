<?php

/**
 * Generated data provider for string title unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string title'   => [
            \Aedart\Model\Traits\Strings\TitleTrait::class,
            \Aedart\Model\Contracts\Strings\TitleAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};