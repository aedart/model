<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\DateTrait;

/**
 * Class StringDateTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\DateTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringDateTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return DateTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'date';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setDate
     * @covers ::getDate
     * @covers ::hasDate
     * @covers ::hasDefaultDate
     * @covers ::getDefaultDate
     */
    public function dateTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->date('Y-m-d H:i:s'), $this->faker->date('Y-m-d H:i:s'));
    }
}