<?php

/**
 * Generated data provider for string locale unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string locale'   => [
            \Aedart\Model\Traits\Strings\LocaleTrait::class,
            \Aedart\Model\Contracts\Strings\LocaleAware::class,
            $faker->locale,
            $faker->locale,
        ]
    ];
};