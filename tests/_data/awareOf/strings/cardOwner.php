<?php

/**
 * Generated data provider for string cardOwner unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string cardOwner'   => [
            \Aedart\Model\Traits\Strings\CardOwnerTrait::class,
            \Aedart\Model\Contracts\Strings\CardOwnerAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};