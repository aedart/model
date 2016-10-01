<?php

/**
 * Generated data provider for string version unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string version'   => [
            \Aedart\Model\Traits\Strings\VersionTrait::class,
            \Aedart\Model\Contracts\Strings\VersionAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};