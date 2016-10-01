<?php

/**
 * Generated data provider for string isbn unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string isbn'   => [
            \Aedart\Model\Traits\Strings\IsbnTrait::class,
            \Aedart\Model\Contracts\Strings\IsbnAware::class,
            $faker->isbn13,
            $faker->isbn13,
        ]
    ];
};