<?php

/**
 * Generated data provider for string nickName unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string nickName'   => [
            \Aedart\Model\Traits\Strings\NickNameTrait::class,
            \Aedart\Model\Contracts\Strings\NickNameAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};