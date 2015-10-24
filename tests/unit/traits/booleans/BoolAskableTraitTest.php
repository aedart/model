<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Booleans\AskableTrait;

/**
 * Class BoolAskableTraitTest
 *
 * @group traits
 * @group booleans
 * @coversDefaultClass Aedart\Model\Traits\Booleans\AskableTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class BoolAskableTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return AskableTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'ask';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setAsk
     * @covers ::getAsk
     * @covers ::hasAsk
     * @covers ::hasDefaultAsk
     * @covers ::getDefaultAsk
     */
    public function askableTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->boolean(), $this->faker->boolean());
    }

    /**
     * @test
     * @covers ::shouldAsk
     */
    public function canDetermineIfAQuestionShouldBeAsked() {
        $traitMock = $this->getTraitMock();

        $this->assertFalse($traitMock->shouldAsk(), 'By default, the state should be false');

        $traitMock->setAsk(true);

        $this->assertTrue($traitMock->shouldAsk(), 'State was changed, so this should be true');
    }
}