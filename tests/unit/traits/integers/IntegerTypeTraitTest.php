<?php

use Aedart\Model\Traits\Integers\TypeTrait;
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;

/**
 * Class IntegerTypeTraitTest
 *
 * @group traits
 * @group integers
 * @coversDefaultClass Aedart\Model\Traits\Integers\TypeTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class IntegerTypeTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return TypeTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName(){
        return 'type';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setType
     * @covers ::getType
     * @covers ::hasType
     * @covers ::hasDefaultType
     * @covers ::getDefaultType
     */
    public function typeTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->randomNumber(3), $this->faker->randomNumber(4));
    }

}