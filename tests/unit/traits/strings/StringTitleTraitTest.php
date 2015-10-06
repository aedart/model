<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\TitleTrait;

/**
 * Class StringTitleTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\TitleTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringTitleTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return TitleTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'title';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setTitle
     * @covers ::getTitle
     * @covers ::hasTitle
     * @covers ::hasDefaultTitle
     * @covers ::getDefaultTitle
     */
    public function titleTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->title, $this->faker->title);
    }
}