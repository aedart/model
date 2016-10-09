<?php

/**
 * Generated data provider for int zone unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int zone'   => [
            \Aedart\Model\Traits\Integers\ZoneTrait::class,
            \Aedart\Model\Contracts\Integers\ZoneAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};