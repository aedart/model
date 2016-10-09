<?php

/**
 * Generated data provider for string column unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string column'   => [
            \Aedart\Model\Traits\Strings\ColumnTrait::class,
            \Aedart\Model\Contracts\Strings\ColumnAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};