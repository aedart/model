<?php

/**
 * Generated data provider for string phone unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string phone'   => [
            \Aedart\Model\Traits\Strings\PhoneTrait::class,
            \Aedart\Model\Contracts\Strings\PhoneAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};