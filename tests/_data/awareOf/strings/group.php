<?php

/**
 * Generated data provider for string group unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string group'   => [
            \Aedart\Model\Traits\Strings\GroupTrait::class,
            \Aedart\Model\Contracts\Strings\GroupAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};