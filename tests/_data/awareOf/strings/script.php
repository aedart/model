<?php

/**
 * Generated data provider for string script unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string script'   => [
            \Aedart\Model\Traits\Strings\ScriptTrait::class,
            \Aedart\Model\Contracts\Strings\ScriptAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};