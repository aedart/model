<?php

/**
 * Generated data provider for string host unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string host'   => [
            \Aedart\Model\Traits\Strings\HostTrait::class,
            \Aedart\Model\Contracts\Strings\HostAware::class,
            $faker->ipv4,
            $faker->url,
        ]
    ];
};