<?php

/**
 * Generated data provider for string brand unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string brand'   => [
            \Aedart\Model\Traits\Strings\BrandTrait::class,
            \Aedart\Model\Contracts\Strings\BrandAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};