<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\DescriptionTrait;

/**
 * Class StringDescriptionTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\DescriptionTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringDescriptionTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return DescriptionTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'description';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setDescription
     * @covers ::getDescription
     * @covers ::hasDescription
     * @covers ::hasDefaultDescription
     * @covers ::getDefaultDescription
     */
    public function descriptionTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->sentence, $this->faker->sentence);
    }
}