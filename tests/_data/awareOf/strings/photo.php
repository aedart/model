<?php

/**
 * Generated data provider for string photo unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string photo'   => [
            \Aedart\Model\Traits\Strings\PhotoTrait::class,
            \Aedart\Model\Contracts\Strings\PhotoAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};