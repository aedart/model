<?php

/**
 * Generated data provider for string code unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string code'   => [
            \Aedart\Model\Traits\Strings\CodeTrait::class,
            \Aedart\Model\Contracts\Strings\CodeAware::class,
            $faker->languageCode,
            $faker->sha1,
        ]
    ];
};