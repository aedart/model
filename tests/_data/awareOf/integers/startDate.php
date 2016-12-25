<?php

/**
 * Generated data provider for int startDate unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int startDate'   => [
            \Aedart\Model\Traits\Integers\StartDateTrait::class,
            \Aedart\Model\Contracts\Integers\StartDateAware::class,
            $faker->unixTime,
            $faker->unixTime,
        ]
    ];
};