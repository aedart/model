<?php

use Aedart\Model\Traits\Integers\TimeoutTrait;
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;

/**
 * IntegerTimeoutTraitTest
 *
 * @group traits
 * @group integers
 * @coversDefaultClass Aedart\Model\Traits\Integers\TimeoutTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class IntegerTimeoutTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return TimeoutTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName(){
        return 'timeout';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     */
    public function timeoutTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->randomNumber(3), $this->faker->randomNumber(4));
    }

}