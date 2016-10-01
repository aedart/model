<?php

/**
 * Generated data provider for string template unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string template'   => [
            \Aedart\Model\Traits\Strings\TemplateTrait::class,
            \Aedart\Model\Contracts\Strings\TemplateAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};