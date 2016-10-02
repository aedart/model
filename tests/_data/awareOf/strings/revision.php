<?php

/**
 * Generated data provider for string revision unit test
 */
return function(\Faker\Generator $faker){
    return [
        'string revision'   => [
            \Aedart\Model\Traits\Strings\RevisionTrait::class,
            \Aedart\Model\Contracts\Strings\RevisionAware::class,
            $faker->sha1,
            $faker->md5,
        ]
    ];
};