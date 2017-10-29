<?php

/**
 * Generated data provider for string cardNumber unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string cardNumber'   => [
            \Aedart\Model\Traits\Strings\CardNumberTrait::class,
            \Aedart\Model\Contracts\Strings\CardNumberAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};