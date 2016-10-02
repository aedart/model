<?php

/**
 * Generated data provider for int timestamp unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int timestamp'   => [
            \Aedart\Model\Traits\Integers\TimestampTrait::class,
            \Aedart\Model\Contracts\Integers\TimestampAware::class,
            $faker->unixTime,
            $faker->unixTime,
        ]
    ];
};