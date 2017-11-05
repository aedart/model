<?php

/**
 * Generated data provider for string path unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string path'   => [
            \Aedart\Model\Traits\Strings\PathTrait::class,
            \Aedart\Model\Contracts\Strings\PathAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};