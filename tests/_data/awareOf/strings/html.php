<?php

/**
 * Generated data provider for string html unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string html'   => [
            \Aedart\Model\Traits\Strings\HtmlTrait::class,
            \Aedart\Model\Contracts\Strings\HtmlAware::class,
            '<' . $faker->word . ' />',
            '<' . $faker->word . ' />',
        ]
    ];
};