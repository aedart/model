<?php

/**
 * Generated data provider for string image unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string image'   => [
            \Aedart\Model\Traits\Strings\ImageTrait::class,
            \Aedart\Model\Contracts\Strings\ImageAware::class,
            $faker->imageUrl(),
            $faker->imageUrl(),
        ]
    ];
};