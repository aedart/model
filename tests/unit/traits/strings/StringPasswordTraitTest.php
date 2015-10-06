<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\PasswordTrait;

/**
 * Class StringPasswordTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\PasswordTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringPasswordTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return PasswordTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'password';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setPassword
     * @covers ::getPassword
     * @covers ::hasPassword
     * @covers ::hasDefaultPassword
     * @covers ::getDefaultPassword
     */
    public function passwordTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->password, $this->faker->password);
    }
}