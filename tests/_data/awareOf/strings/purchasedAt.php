<?php

/**
 * Generated data provider for string purchasedAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string purchasedAt'   => [
            \Aedart\Model\Traits\Strings\PurchasedAtTrait::class,
            \Aedart\Model\Contracts\Strings\PurchasedAtAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};