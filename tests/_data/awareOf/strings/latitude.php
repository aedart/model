<?php

/**
 * Generated data provider for string latitude unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string latitude'   => [
            \Aedart\Model\Traits\Strings\LatitudeTrait::class,
            \Aedart\Model\Contracts\Strings\LatitudeAware::class,
            (string) $faker->latitude,
            (string) $faker->latitude,
        ]
    ];
};