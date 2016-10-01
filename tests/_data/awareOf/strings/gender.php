<?php

/**
 * Generated data provider for string gender unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string gender'   => [
            \Aedart\Model\Traits\Strings\GenderTrait::class,
            \Aedart\Model\Contracts\Strings\GenderAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};