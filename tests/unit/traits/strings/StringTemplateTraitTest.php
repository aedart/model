<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\TemplateTrait;

/**
 * Class StringTemplateTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\TemplateTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringTemplateTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return TemplateTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'template';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setTemplate
     * @covers ::getTemplate
     * @covers ::hasTemplate
     * @covers ::hasDefaultTemplate
     * @covers ::getDefaultTemplate
     */
    public function templateTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->word . '.' . $this->faker->fileExtension, $this->faker->word . '.' . $this->faker->fileExtension);
    }

}