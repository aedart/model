<?php
use Aedart\Model\Contracts\Strings\ContentAware;
use Aedart\Model\Traits\Strings\ContentTrait;
use Aedart\Testing\Laravel\TestCases\Integration\InterfaceAndTraitCompatibilityTestCase;

/**
 * Class StringContentCompatibilityTest
 *
 * @group compatibility
 * @group strings
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringContentCompatibilityTest extends InterfaceAndTraitCompatibilityTestCase{

    /**
     * Returns the class path to a class that implements the
     * given `interface` in question, and that uses its
     * corresponding `trait` implementation.
     *
     * @return string
     */
    public function dummyClassPath() {
        return DummyStringContentContainer::class;
    }

    /**
     * Returns the class path of the `interface` in question
     *
     * @return string
     */
    public function mustImplementInterface() {
        return ContentAware::class;
    }

    /**
     * Returns the class path of the `trait` in question
     *
     * @return string
     */
    public function mustUseTrait() {
        return ContentTrait::class;
    }
}

class DummyStringContentContainer implements ContentAware{
    use ContentTrait;
}