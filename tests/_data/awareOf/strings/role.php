<?php

/**
 * Generated data provider for string role unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string role'   => [
            \Aedart\Model\Traits\Strings\RoleTrait::class,
            \Aedart\Model\Contracts\Strings\RoleAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};