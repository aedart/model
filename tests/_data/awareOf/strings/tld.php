<?php

/**
 * Generated data provider for string tld unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string tld'   => [
            \Aedart\Model\Traits\Strings\TldTrait::class,
            \Aedart\Model\Contracts\Strings\TldAware::class,
            $faker->tld,
            $faker->tld,
        ]
    ];
};