<?php

/**
 * Generated data provider for string lastName unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string lastName'   => [
            \Aedart\Model\Traits\Strings\LastNameTrait::class,
            \Aedart\Model\Contracts\Strings\LastNameAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};