<?php

/**
 * Generated data provider for string url unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string url'   => [
            \Aedart\Model\Traits\Strings\UrlTrait::class,
            \Aedart\Model\Contracts\Strings\UrlAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};