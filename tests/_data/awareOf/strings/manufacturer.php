<?php

/**
 * Generated data provider for string manufacturer unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string manufacturer'   => [
            \Aedart\Model\Traits\Strings\ManufacturerTrait::class,
            \Aedart\Model\Contracts\Strings\ManufacturerAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};