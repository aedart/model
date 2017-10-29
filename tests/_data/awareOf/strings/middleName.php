<?php

/**
 * Generated data provider for string middleName unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string middleName'   => [
            \Aedart\Model\Traits\Strings\MiddleNameTrait::class,
            \Aedart\Model\Contracts\Strings\MiddleNameAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};