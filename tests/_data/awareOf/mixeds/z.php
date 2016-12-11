<?php

/**
 * Generated data provider for mixed z unit test
 */
return function(\Faker\Generator $faker){
    return [
        'mixed z'   => [
            \Aedart\Model\Traits\Mixed\ZTrait::class,
            \Aedart\Model\Contracts\Mixed\ZAware::class,
            $faker->randomElement([$faker->word, $faker->uuid, $faker->randomNumber(), $faker->paragraphs()]),
            $faker->randomElement([$faker->word, $faker->uuid, $faker->randomNumber(), $faker->paragraphs()]),
        ]
    ];
};