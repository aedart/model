<?php

/**
 * Generated data provider for string filePath unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string filePath'   => [
            \Aedart\Model\Traits\Strings\FilePathTrait::class,
            \Aedart\Model\Contracts\Strings\FilePathAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};