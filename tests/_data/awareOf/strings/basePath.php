<?php

/**
 * Generated data provider for string basePath unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string basePath'   => [
            \Aedart\Model\Traits\Strings\BasePathTrait::class,
            \Aedart\Model\Contracts\Strings\BasePathAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};