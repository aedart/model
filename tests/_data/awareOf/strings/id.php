<?php

/**
 * Generated data provider for string id unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string id'   => [
            \Aedart\Model\Traits\Strings\IdTrait::class,
            \Aedart\Model\Contracts\Strings\IdAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};