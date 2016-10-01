<?php

/**
 * Generated data provider for string directory unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string directory'   => [
            \Aedart\Model\Traits\Strings\DirectoryTrait::class,
            \Aedart\Model\Contracts\Strings\DirectoryAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};