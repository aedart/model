<?php

use Aedart\Model\Traits\Strings\VendorTrait;
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;

/**
 * Class StringVendorTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\VendorTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringVendorTraitTest extends GetterSetterTraitTestCase
{
    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath()
    {
        return VendorTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName()
    {
        return 'vendor';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setVendor
     * @covers ::getVendor
     * @covers ::hasVendor
     * @covers ::hasDefaultVendor
     * @covers ::getDefaultVendor
     */
    public function vendorTraitMethods()
    {
        $this->assertGetterSetterTraitMethods($this->faker->word, $this->faker->word);
    }
}