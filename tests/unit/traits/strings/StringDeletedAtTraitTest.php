<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\DeletedAtTrait;

/**
 * Class StringDeletedAtTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\DeletedAtTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringDeletedAtTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return DeletedAtTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'deletedAt';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setDeletedAt
     * @covers ::getDeletedAt
     * @covers ::hasDeletedAt
     * @covers ::hasDefaultDeletedAt
     * @covers ::getDefaultDeletedAt
     */
    public function deletedAtTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->date('Y-m-d H:i:s'), $this->faker->date('Y-m-d H:i:s'));
    }
}