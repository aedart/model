<?php

/**
 * Generated data provider for string xml unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string xml'   => [
            \Aedart\Model\Traits\Strings\XmlTrait::class,
            \Aedart\Model\Contracts\Strings\XmlAware::class,
            $faker->word,
            $faker->word,
        ]
    ];
};