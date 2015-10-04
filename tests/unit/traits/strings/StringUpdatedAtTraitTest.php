<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\UpdatedAtTrait;

/**
 * Class StringUpdatedAtTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\UpdatedAtTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringUpdatedAtTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return UpdatedAtTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'updatedAt';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setUpdatedAt
     * @covers ::getUpdatedAt
     * @covers ::hasUpdatedAt
     * @covers ::hasDefaultUpdatedAt
     * @covers ::getDefaultUpdatedAt
     */
    public function updatedAtTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->date('Y-m-d H:i:s'), $this->faker->date('Y-m-d H:i:s'));
    }
}