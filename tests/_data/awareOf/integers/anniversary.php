<?php

/**
 * Generated data provider for int anniversary unit test
 */
return function(\Faker\Generator $faker){
    return [
        'int anniversary'   => [
            \Aedart\Model\Traits\Integers\AnniversaryTrait::class,
            \Aedart\Model\Contracts\Integers\AnniversaryAware::class,
            $faker->randomNumber(time()),
            $faker->randomNumber(time()),

            // BUG: @see https://github.com/aedart/model/issues/2
            //$faker->randomNumber($faker->unixTime),
            //$faker->randomNumber($faker->unixTime),
        ]
    ];
};