<?php

/**
 * Generated data provider for string domain unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string domain'   => [
            \Aedart\Model\Traits\Strings\DomainTrait::class,
            \Aedart\Model\Contracts\Strings\DomainAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};