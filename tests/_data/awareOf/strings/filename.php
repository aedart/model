<?php

/**
 * Generated data provider for string filename unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string filename'   => [
            \Aedart\Model\Traits\Strings\FilenameTrait::class,
            \Aedart\Model\Contracts\Strings\FilenameAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};