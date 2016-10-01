<?php

/**
 * Generated data provider for string uuid unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string uuid'   => [
            \Aedart\Model\Traits\Strings\UuidTrait::class,
            \Aedart\Model\Contracts\Strings\UuidAware::class,
            $faker->uuid,
            $faker->uuid,
        ]
    ];
};