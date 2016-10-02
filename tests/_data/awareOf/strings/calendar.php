<?php

/**
 * Generated data provider for string calendar unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string calendar'   => [
            \Aedart\Model\Traits\Strings\CalendarTrait::class,
            \Aedart\Model\Contracts\Strings\CalendarAware::class,
            $faker->uuid,
            $faker->uuid,
        ]
    ];
};