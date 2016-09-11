<?php

use Aedart\Model\Traits\Strings\ScriptTrait;
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;

/**
 * StringScriptTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\ScriptTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringScriptTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return ScriptTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'script';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     */
    public function scriptTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->word, $this->faker->word);
    }
}