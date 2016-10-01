<?php
use Aedart\Model\Traits\Booleans\AskableTrait;

/**
 * Class BoolAskableTraitTest
 *
 * @group traits
 * @group booleans
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class BoolAskableTraitTest extends ModelGstTestCase {

    /**
     * @test
     */
    public function canDetermineIfAQuestionShouldBeAsked() {
        $traitMock = $this->makeTraitMock(AskableTrait::class);

        $this->assertFalse($traitMock->shouldAsk(), 'By default, the state should be false');

        $traitMock->setAsk(true);

        $this->assertTrue($traitMock->shouldAsk(), 'State was changed, so this should be true');
    }
}