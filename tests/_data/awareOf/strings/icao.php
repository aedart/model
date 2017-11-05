<?php

/**
 * Generated data provider for string icao unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string icao'   => [
            \Aedart\Model\Traits\Strings\IcaoTrait::class,
            \Aedart\Model\Contracts\Strings\IcaoAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};