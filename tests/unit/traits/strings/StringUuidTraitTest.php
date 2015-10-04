<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\UuidTrait;

/**
 * Class StringUuidTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\UuidTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringUuidTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return UuidTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'uuid';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setUuid
     * @covers ::getUuid
     * @covers ::hasUuid
     * @covers ::hasDefaultUuid
     * @covers ::getDefaultUuid
     */
    public function uuidTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->uuid, $this->faker->uuid);
    }
}