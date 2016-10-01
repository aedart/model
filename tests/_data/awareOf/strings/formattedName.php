<?php

/**
 * Generated data provider for string formattedName unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string formattedName'   => [
            \Aedart\Model\Traits\Strings\FormattedNameTrait::class,
            \Aedart\Model\Contracts\Strings\FormattedNameAware::class,
            $faker->name,
            $faker->name,
        ]
    ];
};