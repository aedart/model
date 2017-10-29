<?php

/**
 * Generated data provider for string postalCode unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string postalCode'   => [
            \Aedart\Model\Traits\Strings\PostalCodeTrait::class,
            \Aedart\Model\Contracts\Strings\PostalCodeAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};