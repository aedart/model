<?php

/**
 * Generated data provider for int deceasedAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int deceasedAt'   => [
            \Aedart\Model\Traits\Integers\DeceasedAtTrait::class,
            \Aedart\Model\Contracts\Integers\DeceasedAtAware::class,
            $faker->unixTime,
            $faker->unixTime,
        ]
    ];
};