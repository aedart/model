<?php

/**
 * Generated data provider for string cardType unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string cardType'   => [
            \Aedart\Model\Traits\Strings\CardTypeTrait::class,
            \Aedart\Model\Contracts\Strings\CardTypeAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};