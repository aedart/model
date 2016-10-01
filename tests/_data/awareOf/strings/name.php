<?php

/**
 * Generated data provider for string name unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string name'   => [
            \Aedart\Model\Traits\Strings\NameTrait::class,
            \Aedart\Model\Contracts\Strings\NameAware::class,
            $faker->name,
            $faker->name,
        ]
    ];
};