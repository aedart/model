<?php

/**
 * Generated data provider for string identifier unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string identifier'   => [
            \Aedart\Model\Traits\Strings\IdentifierTrait::class,
            \Aedart\Model\Contracts\Strings\IdentifierAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};