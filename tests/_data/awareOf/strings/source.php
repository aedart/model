<?php

/**
 * Generated data provider for string source unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string source'   => [
            \Aedart\Model\Traits\Strings\SourceTrait::class,
            \Aedart\Model\Contracts\Strings\SourceAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};