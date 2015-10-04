<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\StartDateTrait;

/**
 * Class StringStartDateTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\StartDateTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringStartDateTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return StartDateTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'startDate';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setStartDate
     * @covers ::getStartDate
     * @covers ::hasStartDate
     * @covers ::hasDefaultStartDate
     * @covers ::getDefaultStartDate
     */
    public function startDateTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->date('Y-m-d H:i:s'), $this->faker->date('Y-m-d H:i:s'));
    }
}