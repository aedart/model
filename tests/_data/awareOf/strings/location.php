<?php

/**
 * Generated data provider for string location unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string location'   => [
            \Aedart\Model\Traits\Strings\LocationTrait::class,
            \Aedart\Model\Contracts\Strings\LocationAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};