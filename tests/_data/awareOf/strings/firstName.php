<?php

/**
 * Generated data provider for string firstName unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string firstName'   => [
            \Aedart\Model\Traits\Strings\FirstNameTrait::class,
            \Aedart\Model\Contracts\Strings\FirstNameAware::class,
            $faker->firstName,
            $faker->firstName,
        ]
    ];
};