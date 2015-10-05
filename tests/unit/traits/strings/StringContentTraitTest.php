<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\ContentTrait;

/**
 * Class StringContentTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\ContentTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringContentTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return ContentTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'content';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setContent
     * @covers ::getContent
     * @covers ::hasContent
     * @covers ::hasDefaultContent
     * @covers ::getDefaultContent
     */
    public function contentTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->realText(), $this->faker->realText());
    }
}