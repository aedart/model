<?php

/**
 * Generated data provider for string size unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string size'   => [
            \Aedart\Model\Traits\Strings\SizeTrait::class,
            \Aedart\Model\Contracts\Strings\SizeAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};