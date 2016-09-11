<?php

use Aedart\Model\Contracts\Integers\TimeoutAware;
use Aedart\Model\Traits\Integers\TimeoutTrait;
use Aedart\Testing\Laravel\TestCases\Integration\InterfaceAndTraitCompatibilityTestCase;

/**
 * IntegerTimeoutCompatibilityTest
 *
 * @group compatibility
 * @group integers
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class IntegerTimeoutCompatibilityTest extends InterfaceAndTraitCompatibilityTestCase
{

    /**
     * Returns the class path to a class that implements the
     * given `interface` in question, and that uses its
     * corresponding `trait` implementation.
     *
     * @return string
     */
    public function dummyClassPath() {
        return DummyIntegerTimeoutContainer::class;
    }

    /**
     * Returns the class path of the `interface` in question
     *
     * @return string
     */
    public function mustImplementInterface() {
        return TimeoutAware::class;
    }

    /**
     * Returns the class path of the `trait` in question
     *
     * @return string
     */
    public function mustUseTrait() {
        return TimeoutTrait::class;
    }
}

class DummyIntegerTimeoutContainer implements TimeoutAware {
    use TimeoutTrait;
}