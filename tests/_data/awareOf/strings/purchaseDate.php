<?php

/**
 * Generated data provider for string purchaseDate unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string purchaseDate'   => [
            \Aedart\Model\Traits\Strings\PurchaseDateTrait::class,
            \Aedart\Model\Contracts\Strings\PurchaseDateAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};