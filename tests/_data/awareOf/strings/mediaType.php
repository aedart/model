<?php

/**
 * Generated data provider for string mediaType unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string mediaType'   => [
            \Aedart\Model\Traits\Strings\MediaTypeTrait::class,
            \Aedart\Model\Contracts\Strings\MediaTypeAware::class,
            $faker->mimeType,
            $faker->mimeType,
        ]
    ];
};