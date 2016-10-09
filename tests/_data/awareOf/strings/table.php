<?php

/**
 * Generated data provider for string table unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string table'   => [
            \Aedart\Model\Traits\Strings\TableTrait::class,
            \Aedart\Model\Contracts\Strings\TableAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};