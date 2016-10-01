<?php

/**
 * Generated data provider for bool ask unit test
 */
return function(\Faker\Generator $faker){
    return [
        'bool ask'   => [
            \Aedart\Model\Traits\Booleans\AskableTrait::class,
            \Aedart\Model\Contracts\Booleans\Askable::class,
            $faker->boolean(),
            $faker->boolean(),
        ]
    ];
};