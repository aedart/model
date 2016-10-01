<?php

/**
 * Generated data provider for string email unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string email'   => [
            \Aedart\Model\Traits\Strings\EmailTrait::class,
            \Aedart\Model\Contracts\Strings\EmailAware::class,
            $faker->email,
            $faker->email,
        ]
    ];
};