<?php

/**
 * Generated data provider for string ipV4 unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string ipV4'   => [
            \Aedart\Model\Traits\Strings\IpV4Trait::class,
            \Aedart\Model\Contracts\Strings\IpV4Aware::class,
            $faker->ipv4,
            $faker->ipv4,
        ]
    ];
};