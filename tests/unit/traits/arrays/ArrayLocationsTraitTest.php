<?php

use Aedart\Model\Traits\Arrays\LocationsTrait;
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;

/**
 * ArrayLocationsTraitTest
 *
 * @group traits
 * @group arrays
 * @coversDefaultClass Aedart\Model\Traits\Arrays\LocationsTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class ArrayLocationsTraitTest extends GetterSetterTraitTestCase
{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return LocationsTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'locations';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     */
    public function locationsTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->words(), $this->faker->words());
    }
}