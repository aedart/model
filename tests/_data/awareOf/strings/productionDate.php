<?php

/**
 * Generated data provider for string productionDate unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string productionDate'   => [
            \Aedart\Model\Traits\Strings\ProductionDateTrait::class,
            \Aedart\Model\Contracts\Strings\ProductionDateAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};