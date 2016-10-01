<?php

/**
 * Generated data provider for string anniversary unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string anniversary'   => [
            \Aedart\Model\Traits\Strings\AnniversaryTrait::class,
            \Aedart\Model\Contracts\Strings\AnniversaryAware::class,
            $faker->date(),
            $faker->date(),
        ]
    ];
};