<?php

/**
 * Generated data provider for string error unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string error'   => [
            \Aedart\Model\Traits\Strings\ErrorTrait::class,
            \Aedart\Model\Contracts\Strings\ErrorAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};