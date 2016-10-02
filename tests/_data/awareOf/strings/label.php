<?php

/**
 * Generated data provider for string label unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string label'   => [
            \Aedart\Model\Traits\Strings\LabelTrait::class,
            \Aedart\Model\Contracts\Strings\LabelAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};