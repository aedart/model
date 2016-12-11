<?php

/**
 * Generated data provider for mixed x unit test
 */
return function(\Faker\Generator $faker){
    return [
        'mixed x'   => [
            \Aedart\Model\Traits\Mixed\XTrait::class,
            \Aedart\Model\Contracts\Mixed\XAware::class,
            $faker->randomElement([$faker->word, $faker->uuid, $faker->randomNumber(), $faker->paragraphs()]),
            $faker->randomElement([$faker->word, $faker->uuid, $faker->randomNumber(), $faker->paragraphs()]),
        ]
    ];
};