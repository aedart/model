<?php

/**
 * Generated data provider for string kind unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string kind'   => [
            \Aedart\Model\Traits\Strings\KindTrait::class,
            \Aedart\Model\Contracts\Strings\KindAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};