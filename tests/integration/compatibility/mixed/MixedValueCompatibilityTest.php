<?php

use Aedart\Model\Contracts\Mixed\ValueAware;
use Aedart\Model\Traits\Mixed\ValueTrait;
use Aedart\Testing\Laravel\TestCases\Integration\InterfaceAndTraitCompatibilityTestCase;

/**
 * MixedValueCompatibilityTest
 *
 * @group compatibility
 * @group mixed
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class MixedValueCompatibilityTest extends InterfaceAndTraitCompatibilityTestCase{

    /**
     * Returns the class path to a class that implements the
     * given `interface` in question, and that uses its
     * corresponding `trait` implementation.
     *
     * @return string
     */
    public function dummyClassPath() {
        return DummyMixedValueContainer::class;
    }

    /**
     * Returns the class path of the `interface` in question
     *
     * @return string
     */
    public function mustImplementInterface() {
        return ValueAware::class;
    }

    /**
     * Returns the class path of the `trait` in question
     *
     * @return string
     */
    public function mustUseTrait() {
        return ValueTrait::class;
    }
}

class DummyMixedValueContainer implements ValueAware {
    use ValueTrait;
}