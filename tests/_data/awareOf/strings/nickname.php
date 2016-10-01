<?php

/**
 * Generated data provider for string nickname unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string nickname'   => [
            \Aedart\Model\Traits\Strings\NicknameTrait::class,
            \Aedart\Model\Contracts\Strings\NicknameAware::class,
            $faker->name,
            $faker->name,
        ]
    ];
};