<?php

/**
 * Generated data provider for string colour unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string colour'   => [
            \Aedart\Model\Traits\Strings\ColourTrait::class,
            \Aedart\Model\Contracts\Strings\ColourAware::class,
            $faker->hexColor,
            $faker->colorName,
        ]
    ];
};