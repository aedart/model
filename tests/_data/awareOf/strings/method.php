<?php

/**
 * Generated data provider for string method unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string method'   => [
            \Aedart\Model\Traits\Strings\MethodTrait::class,
            \Aedart\Model\Contracts\Strings\MethodAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};