<?php

/**
 * Generated data provider for string tag unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string tag'   => [
            \Aedart\Model\Traits\Strings\TagTrait::class,
            \Aedart\Model\Contracts\Strings\TagAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};