<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\NameTrait;

/**
 * Class StringNameTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\NameTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringNameTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return NameTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'name';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setName
     * @covers ::getName
     * @covers ::hasName
     * @covers ::hasDefaultName
     * @covers ::getDefaultName
     */
    public function nameTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->name, $this->faker->name);
    }
}