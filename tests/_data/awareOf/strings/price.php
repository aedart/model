<?php

/**
 * Generated data provider for string price unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string price'   => [
            \Aedart\Model\Traits\Strings\PriceTrait::class,
            \Aedart\Model\Contracts\Strings\PriceAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};