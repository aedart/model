<?php

/**
 * Generated data provider for float size unit test
 */
return function(\Faker\Generator $faker){
    return [
        'float size'   => [
            \Aedart\Model\Traits\Floats\SizeTrait::class,
            \Aedart\Model\Contracts\Floats\SizeAware::class,
            $faker->randomFloat($faker->randomDigitNotNull),
            $faker->randomFloat($faker->randomDigitNotNull),
        ]
    ];
};