<?php

use Aedart\Model\Traits\Mixed\ValueTrait;
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;

/**
 * MixedValueTraitTest
 *
 * @group traits
 * @group mixed
 * @coversDefaultClass Aedart\Model\Traits\Mixed\ValueTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class MixedValueTraitTest extends GetterSetterTraitTestCase
{
    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return ValueTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'value';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     */
    public function valueTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->randomDigit, $this->faker->words());
    }
}