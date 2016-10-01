<?php

/**
 * Generated data provider for string endDate unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string endDate'   => [
            \Aedart\Model\Traits\Strings\EndDateTrait::class,
            \Aedart\Model\Contracts\Strings\EndDateAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};