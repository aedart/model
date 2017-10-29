<?php

use Codeception\Configuration;
use Faker\Factory;
use Symfony\Component\Finder\Finder;

/**
 * Traits Test
 *
 * @group traits
 * @group aware-of
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class TraitsTest extends ModelGstTestCase
{

    /************************************************************
     * Helpers
     ***********************************************************/

    /**
     * Aware of data provider
     *
     * @return array
     */
    public function awareOfProvider()
    {
        // Return the providers if previously loaded
        static $providers = [];
        if( ! empty($providers)){
            return $providers;
        }

        // Faker is not available when in the context
        // of a data provider. We therefore must ensure to
        // create the instance if not already created.
        $faker = Factory::create();

        // Source of providers
        $dataDir = Configuration::dataDir() . 'awareOf/';

        // Obtain a list of all providers
        $finder = new Finder();
        $finder->files()->name('*.php')->in($dataDir);

        // Load all found providers
        foreach ($finder as $file){
            // Include file and obtain method
            $method = include $file->getRealPath();

            // Invoke the method and get the array
            $provider = $method($faker);

            // Merge provider into list of providers
            $providers = array_merge($providers, $provider);
        }

        return $providers;
    }

    /************************************************************
     * Actual tests
     ***********************************************************/

    /**
     * @test
     *
     * @dataProvider awareOfProvider
     *
     * @param string $trait class path
     * @param string $interface class path
     * @param mixed $valeToSetAndGet The value used to set and obtain again
     * @param mixed $customDefault A custom default value
     */
    public function awareOfComponent($trait, $interface, $valeToSetAndGet, $customDefault)
    {
        $this->assertTraitCompatibility($trait, $interface);

        $this->assertGetterSetterTraitMethods($trait, $valeToSetAndGet, $customDefault);
    }
}