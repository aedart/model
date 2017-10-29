<?php

/**
 * Generated data provider for string zone unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string zone'   => [
            \Aedart\Model\Traits\Strings\ZoneTrait::class,
            \Aedart\Model\Contracts\Strings\ZoneAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};