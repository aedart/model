<?php

/**
 * Generated data provider for string package unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string package'   => [
            \Aedart\Model\Traits\Strings\PackageTrait::class,
            \Aedart\Model\Contracts\Strings\PackageAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};