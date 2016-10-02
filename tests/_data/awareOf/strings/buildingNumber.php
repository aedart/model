<?php

/**
 * Generated data provider for string buildingNumber unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string buildingNumber'   => [
            \Aedart\Model\Traits\Strings\BuildingNumberTrait::class,
            \Aedart\Model\Contracts\Strings\BuildingNumberAware::class,
            $faker->buildingNumber,
            $faker->buildingNumber,
        ]
    ];
};