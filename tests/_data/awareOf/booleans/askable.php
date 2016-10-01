<?php

return function(\Faker\Generator $faker){
    return [
        'Boolean Askable'   => [
            \Aedart\Model\Traits\Booleans\AskableTrait::class,
            \Aedart\Model\Contracts\Booleans\Askable::class,
            $faker->boolean(),
            $faker->boolean(),
        ]
    ];
};