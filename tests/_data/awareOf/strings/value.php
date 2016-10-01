<?php

/**
 * Generated data provider for string value unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string value'   => [
            \Aedart\Model\Traits\Strings\ValueTrait::class,
            \Aedart\Model\Contracts\Strings\ValueAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};