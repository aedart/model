<?php

/**
 * Generated data provider for string company unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string company'   => [
            \Aedart\Model\Traits\Strings\CompanyTrait::class,
            \Aedart\Model\Contracts\Strings\CompanyAware::class,
            $faker->company,
            $faker->company,
        ]
    ];
};