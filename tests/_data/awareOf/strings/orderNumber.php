<?php

/**
 * Generated data provider for string orderNumber unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string orderNumber'   => [
            \Aedart\Model\Traits\Strings\OrderNumberTrait::class,
            \Aedart\Model\Contracts\Strings\OrderNumberAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};