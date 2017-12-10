<?php

/**
 * Generated data provider for string distance unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string distance'   => [
            \Aedart\Model\Traits\Strings\DistanceTrait::class,
            \Aedart\Model\Contracts\Strings\DistanceAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};