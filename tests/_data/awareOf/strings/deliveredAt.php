<?php

/**
 * Generated data provider for string deliveredAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string deliveredAt'   => [
            \Aedart\Model\Traits\Strings\DeliveredAtTrait::class,
            \Aedart\Model\Contracts\Strings\DeliveredAtAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};