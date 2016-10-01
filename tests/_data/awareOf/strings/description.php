<?php

/**
 * Generated data provider for string description unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string description'   => [
            \Aedart\Model\Traits\Strings\DescriptionTrait::class,
            \Aedart\Model\Contracts\Strings\DescriptionAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};