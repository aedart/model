<?php

/**
 * Generated data provider for mixed y unit test
 */
return function(\Faker\Generator $faker){
    return [
        'mixed y'   => [
            \Aedart\Model\Traits\Mixed\YTrait::class,
            \Aedart\Model\Contracts\Mixed\YAware::class,
            $faker->randomElement([$faker->word, $faker->uuid, $faker->randomNumber(), $faker->paragraphs()]),
            $faker->randomElement([$faker->word, $faker->uuid, $faker->randomNumber(), $faker->paragraphs()]),
        ]
    ];
};