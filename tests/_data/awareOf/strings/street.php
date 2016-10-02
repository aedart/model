<?php

/**
 * Generated data provider for string street unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string street'   => [
            \Aedart\Model\Traits\Strings\StreetTrait::class,
            \Aedart\Model\Contracts\Strings\StreetAware::class,
            $faker->streetAddress,
            $faker->streetAddress,
        ]
    ];
};