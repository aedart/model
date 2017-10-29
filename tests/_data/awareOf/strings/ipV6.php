<?php

/**
 * Generated data provider for string ipV6 unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string ipV6'   => [
            \Aedart\Model\Traits\Strings\IpV6Trait::class,
            \Aedart\Model\Contracts\Strings\IpV6Aware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};