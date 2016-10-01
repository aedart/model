<?php

/**
 * Generated data provider for string suffix unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string suffix'   => [
            \Aedart\Model\Traits\Strings\SuffixTrait::class,
            \Aedart\Model\Contracts\Strings\SuffixAware::class,
            $faker->streetSuffix,
            $faker->companySuffix,
        ]
    ];
};