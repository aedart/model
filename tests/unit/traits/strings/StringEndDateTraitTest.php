<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\EndDateTrait;

/**
 * Class StringEndDateTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\EndDateTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringEndDateTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return EndDateTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'endDate';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setEndDate
     * @covers ::getEndDate
     * @covers ::hasEndDate
     * @covers ::hasDefaultEndDate
     * @covers ::getDefaultEndDate
     */
    public function endDateTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->date('Y-m-d H:i:s'), $this->faker->date('Y-m-d H:i:s'));
    }
}