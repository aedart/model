<?php

use Aedart\Model\Traits\Strings\PatternTrait;
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;

/**
 * StringPatternTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\PatternTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringPatternTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return PatternTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'pattern';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setPattern
     * @covers ::getPattern
     * @covers ::hasPattern
     * @covers ::hasDefaultPattern
     * @covers ::getDefaultPattern
     */
    public function patternTraitMethods(){
        $this->assertGetterSetterTraitMethods(
            $this->faker->randomElement([
                '[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}',
                '*.*',
                'lorum{lipsum}'
            ]),
            $this->faker->randomElement([
                '[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}',
                '*.*',
                'lorum{lipsum}'
            ])
        );
    }
}