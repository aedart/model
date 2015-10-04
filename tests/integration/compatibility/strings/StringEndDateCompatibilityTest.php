<?php
use Aedart\Model\Contracts\Strings\EndDateAware;
use Aedart\Model\Traits\Strings\EndDateTrait;
use Aedart\Testing\Laravel\TestCases\Integration\InterfaceAndTraitCompatibilityTestCase;

/**
 * Class StringEndDateCompatibilityTest
 *
 * @group compatibility
 * @group strings
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringEndDateCompatibilityTest extends InterfaceAndTraitCompatibilityTestCase{

    /**
     * Returns the class path to a class that implements the
     * given `interface` in question, and that uses its
     * corresponding `trait` implementation.
     *
     * @return string
     */
    public function dummyClassPath() {
        return DummyStringEndDateContainer::class;
    }

    /**
     * Returns the class path of the `interface` in question
     *
     * @return string
     */
    public function mustImplementInterface() {
        return EndDateAware::class;
    }

    /**
     * Returns the class path of the `trait` in question
     *
     * @return string
     */
    public function mustUseTrait() {
        return EndDateTrait::class;
    }
}

class DummyStringEndDateContainer implements EndDateAware {
    use EndDateTrait;
}