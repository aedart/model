<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\EmailTrait;

/**
 * Class StringEmailTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\EmailTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringEmailTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return EmailTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'email';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setEmail
     * @covers ::getEmail
     * @covers ::hasEmail
     * @covers ::hasDefaultEmail
     * @covers ::getDefaultEmail
     */
    public function emailTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->email, $this->faker->email);
    }
}