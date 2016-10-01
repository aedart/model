<?php

/**
 * Generated data provider for string username unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string username'   => [
            \Aedart\Model\Traits\Strings\UsernameTrait::class,
            \Aedart\Model\Contracts\Strings\UsernameAware::class,
            $faker->userName,
            $faker->userName,
        ]
    ];
};