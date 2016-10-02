<?php

/**
 * Generated data provider for string logo unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string logo'   => [
            \Aedart\Model\Traits\Strings\LogoTrait::class,
            \Aedart\Model\Contracts\Strings\LogoAware::class,
            $faker->imageUrl(),
            $faker->imageUrl(),
        ]
    ];
};