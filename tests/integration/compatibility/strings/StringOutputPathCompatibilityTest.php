<?php
use Aedart\Model\Contracts\Strings\OutputPathAware;
use Aedart\Model\Traits\Strings\OutputPathTrait;
use Aedart\Testing\Laravel\TestCases\Integration\InterfaceAndTraitCompatibilityTestCase;

/**
 * Class StringOutputPathCompatibilityTest
 *
 * @group compatibility
 * @group strings
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringOutputPathCompatibilityTest extends InterfaceAndTraitCompatibilityTestCase{

    /**
     * Returns the class path to a class that implements the
     * given `interface` in question, and that uses its
     * corresponding `trait` implementation.
     *
     * @return string
     */
    public function dummyClassPath() {
        return DummyStringOutputPathContainer::class;
    }

    /**
     * Returns the class path of the `interface` in question
     *
     * @return string
     */
    public function mustImplementInterface() {
        return OutputPathAware::class;
    }

    /**
     * Returns the class path of the `trait` in question
     *
     * @return string
     */
    public function mustUseTrait() {
        return OutputPathTrait::class;
    }
}

class DummyStringOutputPathContainer implements OutputPathAware {
    use OutputPathTrait;
}