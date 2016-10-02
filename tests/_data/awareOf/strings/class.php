<?php

/**
 * Generated data provider for string class unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string class'   => [
            \Aedart\Model\Traits\Strings\ClassTrait::class,
            \Aedart\Model\Contracts\Strings\ClassAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};