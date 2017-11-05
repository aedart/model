<?php

/**
 * Generated data provider for string format unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string format'   => [
            \Aedart\Model\Traits\Strings\FormatTrait::class,
            \Aedart\Model\Contracts\Strings\FormatAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};