<?php

/**
 * Generated data provider for string region unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string region'   => [
            \Aedart\Model\Traits\Strings\RegionTrait::class,
            \Aedart\Model\Contracts\Strings\RegionAware::class,
            $faker->state,
            $faker->state,
        ]
    ];
};