<?php

use Aedart\Model\Traits\Strings\TypeTrait;
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;

/**
 * Class StringTypeTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\TypeTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringTypeTraitTest extends GetterSetterTraitTestCase
{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return TypeTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'type';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setType
     * @covers ::getType
     * @covers ::hasType
     * @covers ::hasDefaultType
     * @covers ::getDefaultType
     */
    public function typeTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->word, $this->faker->word);
    }
}