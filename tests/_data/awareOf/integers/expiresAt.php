<?php

/**
 * Generated data provider for int expiresAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int expiresAt'   => [
            \Aedart\Model\Traits\Integers\ExpiresAtTrait::class,
            \Aedart\Model\Contracts\Integers\ExpiresAtAware::class,
            $faker->unixTime,
            $faker->unixTime,
        ]
    ];
};