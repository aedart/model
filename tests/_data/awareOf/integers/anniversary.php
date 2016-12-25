<?php

/**
 * Generated data provider for int anniversary unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int anniversary'   => [
            \Aedart\Model\Traits\Integers\AnniversaryTrait::class,
            \Aedart\Model\Contracts\Integers\AnniversaryAware::class,
            $faker->unixTime,
            $faker->unixTime,
        ]
    ];
};