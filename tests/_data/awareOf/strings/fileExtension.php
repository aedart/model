<?php

/**
 * Generated data provider for string fileExtension unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string fileExtension'   => [
            \Aedart\Model\Traits\Strings\FileExtensionTrait::class,
            \Aedart\Model\Contracts\Strings\FileExtensionAware::class,
            $faker->fileExtension,
            $faker->fileExtension,
        ]
    ];
};