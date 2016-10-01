<?php

/**
 * Generated data provider for string vendor unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string vendor'   => [
            \Aedart\Model\Traits\Strings\VendorTrait::class,
            \Aedart\Model\Contracts\Strings\VendorAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};