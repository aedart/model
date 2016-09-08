<?php

use Aedart\Model\Traits\Strings\VersionTrait;
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;

/**
 * StringVersionTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\VersionTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringVersionTraitTest extends GetterSetterTraitTestCase
{
    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath()
    {
        return VersionTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName()
    {
        return 'version';
    }

    /**
     * Returns a random semantic version
     *
     * @return string
     */
    public function makeVersion()
    {
        return $this->faker->randomDigitNotNull . '.' . $this->faker->randomDigitNotNull . '.' . $this->faker->randomDigitNotNull;
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     */
    public function versionTraitMethods()
    {
        $this->assertGetterSetterTraitMethods($this->makeVersion(), $this->makeVersion());
    }
}