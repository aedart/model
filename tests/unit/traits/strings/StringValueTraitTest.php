<?php

use Aedart\Model\Traits\Strings\ValueTrait;
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;

/**
 * Class StringValueTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\ValueTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringValueTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return ValueTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'value';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setValue
     * @covers ::getValue
     * @covers ::hasValue
     * @covers ::hasDefaultValue
     * @covers ::getDefaultValue
     */
    public function ValueTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->word, $this->faker->word);
    }
}