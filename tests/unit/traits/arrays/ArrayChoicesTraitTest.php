<?php

use Aedart\Model\Traits\Arrays\ChoicesTrait;
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;

/**
 * Class ArrayChoicesTraitTest
 *
 * @group traits
 * @group arrays
 * @coversDefaultClass Aedart\Model\Traits\Arrays\ChoicesTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class ArrayChoicesTraitTest extends GetterSetterTraitTestCase
{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return ChoicesTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'choices';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setChoices
     * @covers ::getChoices
     * @covers ::hasChoices
     * @covers ::hasDefaultChoices
     * @covers ::getDefaultChoices
     */
    public function ChoicesTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->words(), $this->faker->paragraphs());
    }

}