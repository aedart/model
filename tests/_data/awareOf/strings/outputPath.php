<?php

/**
 * Generated data provider for string outputPath unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string outputPath'   => [
            \Aedart\Model\Traits\Strings\OutputPathTrait::class,
            \Aedart\Model\Contracts\Strings\OutputPathAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};