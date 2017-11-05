<?php

/**
 * Generated data provider for string edition unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string edition'   => [
            \Aedart\Model\Traits\Strings\EditionTrait::class,
            \Aedart\Model\Contracts\Strings\EditionAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};