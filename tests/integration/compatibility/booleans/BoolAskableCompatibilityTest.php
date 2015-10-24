<?php
use Aedart\Model\Contracts\Booleans\Askable;
use Aedart\Model\Traits\Booleans\AskableTrait;
use Aedart\Testing\Laravel\TestCases\Integration\InterfaceAndTraitCompatibilityTestCase;

/**
 * Class BoolAskableCompatibilityTest
 *
 * @group compatibility
 * @group booleans
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class BoolAskableCompatibilityTest extends InterfaceAndTraitCompatibilityTestCase{

    /**
     * Returns the class path to a class that implements the
     * given `interface` in question, and that uses its
     * corresponding `trait` implementation.
     *
     * @return string
     */
    public function dummyClassPath() {
        return DummyBoolAskableContainer::class;
    }

    /**
     * Returns the class path of the `interface` in question
     *
     * @return string
     */
    public function mustImplementInterface() {
        return Askable::class;
    }

    /**
     * Returns the class path of the `trait` in question
     *
     * @return string
     */
    public function mustUseTrait() {
        return AskableTrait::class;
    }
}

class DummyBoolAskableContainer implements Askable {
    use AskableTrait;
}