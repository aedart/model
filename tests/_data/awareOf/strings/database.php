<?php

/**
 * Generated data provider for string database unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string database'   => [
            \Aedart\Model\Traits\Strings\DatabaseTrait::class,
            \Aedart\Model\Contracts\Strings\DatabaseAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};