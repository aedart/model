<?php

/**
 * Generated data provider for string language unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string language'   => [
            \Aedart\Model\Traits\Strings\LanguageTrait::class,
            \Aedart\Model\Contracts\Strings\LanguageAware::class,
            $faker->languageCode,
            $faker->languageCode,
        ]
    ];
};