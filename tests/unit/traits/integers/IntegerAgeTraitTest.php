<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Integers\AgeTrait;

/**
 * Class IntegerAgeTraitTest
 *
 * @group traits
 * @group integers
 * @coversDefaultClass Aedart\Model\Traits\Integers\AgeTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class IntegerAgeTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return AgeTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'age';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setAge
     * @covers ::getAge
     * @covers ::hasAge
     * @covers ::hasDefaultAge
     * @covers ::getDefaultAge
     */
    public function ageTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->randomNumber(1), $this->faker->randomNumber(2));
    }
}