<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\CreatedAtTrait;

/**
 * Class StringCreatedAtTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\CreatedAtTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringCreatedAtTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return CreatedAtTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'createdAt';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setCreatedAt
     * @covers ::getCreatedAt
     * @covers ::hasCreatedAt
     * @covers ::hasDefaultCreatedAt
     * @covers ::getDefaultCreatedAt
     */
    public function createdAtTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->date('Y-m-d H:i:s'), $this->faker->date('Y-m-d H:i:s'));
    }
}