<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\UsernameTrait;

/**
 * Class StringUsernameTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\UsernameTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringUsernameTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return UsernameTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'username';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setUsername
     * @covers ::getUsername
     * @covers ::hasUsername
     * @covers ::hasDefaultUsername
     * @covers ::getDefaultUsername
     */
    public function usernameTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->userName, $this->faker->userName);
    }
}