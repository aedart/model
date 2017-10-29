<?php

/**
 * Generated data provider for string ip unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string ip'   => [
            \Aedart\Model\Traits\Strings\IpTrait::class,
            \Aedart\Model\Contracts\Strings\IpAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};