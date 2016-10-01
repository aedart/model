<?php

/**
 * Generated data provider for mixed value unit test
 */
return function(\Faker\Generator $faker){
    return [
        'mixed value'   => [
            \Aedart\Model\Traits\Mixed\ValueTrait::class,
            \Aedart\Model\Contracts\Mixed\ValueAware::class,
            $faker->randomElement([$faker->word, $faker->uuid, $faker->randomNumber(), $faker->paragraphs()]),
            $faker->randomElement([$faker->word, $faker->uuid, $faker->randomNumber(), $faker->paragraphs()]),
        ]
    ];
};