<?php

/**
 * Generated data provider for string area unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string area'   => [
            \Aedart\Model\Traits\Strings\AreaTrait::class,
            \Aedart\Model\Contracts\Strings\AreaAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};