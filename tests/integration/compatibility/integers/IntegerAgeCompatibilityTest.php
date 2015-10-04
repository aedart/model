<?php
use Aedart\Model\Contracts\Integers\AgeAware;
use Aedart\Model\Traits\Integers\AgeTrait;
use Aedart\Testing\Laravel\TestCases\Integration\InterfaceAndTraitCompatibilityTestCase;

/**
 * Class IntegerAgeCompatibilityTest
 *
 * @group compatibility
 * @group integers
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class IntegerAgeCompatibilityTest extends InterfaceAndTraitCompatibilityTestCase{

    /**
     * Returns the class path to a class that implements the
     * given `interface` in question, and that uses its
     * corresponding `trait` implementation.
     *
     * @return string
     */
    public function dummyClassPath() {
        return DummyIntegerAgeContainer::class;
    }

    /**
     * Returns the class path of the `interface` in question
     *
     * @return string
     */
    public function mustImplementInterface() {
        return AgeAware::class;
    }

    /**
     * Returns the class path of the `trait` in question
     *
     * @return string
     */
    public function mustUseTrait() {
        return AgeTrait::class;
    }
}

class DummyIntegerAgeContainer implements AgeAware {
    use AgeTrait;
}