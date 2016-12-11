<?php

/**
 * Generated data provider for float width unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float width'   => [
            \Aedart\Model\Traits\Floats\WidthTrait::class,
            \Aedart\Model\Contracts\Floats\WidthAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};