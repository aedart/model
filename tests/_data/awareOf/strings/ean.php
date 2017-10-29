<?php

/**
 * Generated data provider for string ean unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string ean'   => [
            \Aedart\Model\Traits\Strings\EanTrait::class,
            \Aedart\Model\Contracts\Strings\EanAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};