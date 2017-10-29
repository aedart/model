<?php

/**
 * Generated data provider for string organisation unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string organisation'   => [
            \Aedart\Model\Traits\Strings\OrganisationTrait::class,
            \Aedart\Model\Contracts\Strings\OrganisationAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};