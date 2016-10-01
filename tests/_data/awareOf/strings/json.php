<?php

/**
 * Generated data provider for string json unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string json'   => [
            \Aedart\Model\Traits\Strings\JsonTrait::class,
            \Aedart\Model\Contracts\Strings\JsonAware::class,
            json_encode([
                $faker->word => $faker->uuid,
                $faker->word => $faker->words(),
            ]),
            json_encode([
                $faker->word => $faker->uuid,
                $faker->word => $faker->words(),
            ]),
        ]
    ];
};