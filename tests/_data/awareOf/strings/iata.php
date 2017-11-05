<?php

/**
 * Generated data provider for string iata unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string iata'   => [
            \Aedart\Model\Traits\Strings\IataTrait::class,
            \Aedart\Model\Contracts\Strings\IataAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};