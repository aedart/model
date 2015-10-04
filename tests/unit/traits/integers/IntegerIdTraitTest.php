<?php namespace unit\traits\integers;

use Aedart\Model\Traits\Integers\IdTrait;
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use \Mockery as m;

/**
 * Class IntegerIdTraitTest
 *
 * @group traits
 * @group integers
 * @coversDefaultClass Aedart\Model\Traits\Integers\IdTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package unit\traits\integers
 */
class IntegerIdTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return IdTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName(){
        return 'id';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setId
     * @covers ::getId
     * @covers ::hasId
     * @covers ::hasDefaultId
     * @covers ::getDefaultId
     */
    public function idTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->randomNumber(3), $this->faker->randomNumber(4));
    }
}