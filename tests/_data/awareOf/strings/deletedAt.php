<?php

/**
 * Generated data provider for string deletedAt unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string deletedAt'   => [
            \Aedart\Model\Traits\Strings\DeletedAtTrait::class,
            \Aedart\Model\Contracts\Strings\DeletedAtAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};