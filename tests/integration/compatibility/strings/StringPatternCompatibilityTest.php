<?php

use Aedart\Model\Contracts\Strings\PatternAware;
use Aedart\Model\Traits\Strings\PatternTrait;
use Aedart\Testing\Laravel\TestCases\Integration\InterfaceAndTraitCompatibilityTestCase;

/**
 * StringPatternCompatibilityTest
 *
 * @group compatibility
 * @group strings
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringPatternCompatibilityTest extends InterfaceAndTraitCompatibilityTestCase{

    /**
     * Returns the class path to a class that implements the
     * given `interface` in question, and that uses its
     * corresponding `trait` implementation.
     *
     * @return string
     */
    public function dummyClassPath() {
        return DummyStringPatternContainer::class;
    }

    /**
     * Returns the class path of the `interface` in question
     *
     * @return string
     */
    public function mustImplementInterface() {
        return PatternAware::class;
    }

    /**
     * Returns the class path of the `trait` in question
     *
     * @return string
     */
    public function mustUseTrait() {
        return PatternTrait::class;
    }
}

class DummyStringPatternContainer implements PatternAware {
    use PatternTrait;
}