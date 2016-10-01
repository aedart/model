<?php

/**
 * Generated data provider for string date unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string date'   => [
            \Aedart\Model\Traits\Strings\DateTrait::class,
            \Aedart\Model\Contracts\Strings\DateAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};