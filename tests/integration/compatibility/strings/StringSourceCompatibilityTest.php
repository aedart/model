<?php
use Aedart\Model\Contracts\Strings\SourceAware;
use Aedart\Model\Traits\Strings\SourceTrait;
use Aedart\Testing\Laravel\TestCases\Integration\InterfaceAndTraitCompatibilityTestCase;

/**
 * Class StringSourceCompatibilityTest
 *
 * @group compatibility
 * @group strings
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringSourceCompatibilityTest extends InterfaceAndTraitCompatibilityTestCase
{

    /**
     * Returns the class path to a class that implements the
     * given `interface` in question, and that uses its
     * corresponding `trait` implementation.
     *
     * @return string
     */
    public function dummyClassPath() {
        return DummyStringSourceContainer::class;
    }

    /**
     * Returns the class path of the `interface` in question
     *
     * @return string
     */
    public function mustImplementInterface() {
        return SourceAware::class;
    }

    /**
     * Returns the class path of the `trait` in question
     *
     * @return string
     */
    public function mustUseTrait() {
        return SourceTrait::class;
    }
}

class DummyStringSourceContainer implements SourceAware{
    use SourceTrait;
}