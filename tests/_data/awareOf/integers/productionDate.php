<?php

/**
 * Generated data provider for int productionDate unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int productionDate'   => [
            \Aedart\Model\Traits\Integers\ProductionDateTrait::class,
            \Aedart\Model\Contracts\Integers\ProductionDateAware::class,
            $faker->randomNumber($faker->randomDigitNotNull),
            $faker->randomNumber($faker->randomDigitNotNull),
        ]
    ];
};