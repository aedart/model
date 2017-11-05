<?php

/**
 * Generated data provider for string isicV4 unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string isicV4'   => [
            \Aedart\Model\Traits\Strings\IsicV4Trait::class,
            \Aedart\Model\Contracts\Strings\IsicV4Aware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};