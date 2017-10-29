<?php

/**
 * Generated data provider for string password unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string password'   => [
            \Aedart\Model\Traits\Strings\PasswordTrait::class,
            \Aedart\Model\Contracts\Strings\PasswordAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};