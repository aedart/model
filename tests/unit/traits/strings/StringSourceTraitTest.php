<?php

use Aedart\Model\Traits\Strings\SourceTrait;
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;

/**
 * Class StringSourceTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\SourceTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringSourceTraitTest extends GetterSetterTraitTestCase
{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath()
    {
        return SourceTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName()
    {
        return 'source';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setSource
     * @covers ::getSource
     * @covers ::hasSource
     * @covers ::hasDefaultSource
     * @covers ::getDefaultSource
     */
    public function runSourceTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->word, $this->faker->word);
    }
}