<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Arrays\DataTrait;

/**
 * Class ArrayDataTraitTest
 *
 * @group traits
 * @group arrays
 * @coversDefaultClass Aedart\Model\Traits\Arrays\DataTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class ArrayDataTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return DataTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'data';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setData
     * @covers ::getData
     * @covers ::hasData
     * @covers ::hasDefaultData
     * @covers ::getDefaultData
     */
    public function dataTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->words(), $this->faker->paragraphs());
    }
}