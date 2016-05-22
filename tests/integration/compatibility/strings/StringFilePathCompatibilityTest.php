<?php
use Aedart\Model\Contracts\Strings\FilePathAware;
use Aedart\Model\Traits\Strings\FilePathTrait;
use Aedart\Testing\Laravel\TestCases\Integration\InterfaceAndTraitCompatibilityTestCase;

/**
 * Class StringFilePathCompatibilityTest
 *
 * @group compatibility
 * @group strings
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringFilePathCompatibilityTest extends InterfaceAndTraitCompatibilityTestCase
{

    /**
     * Returns the class path to a class that implements the
     * given `interface` in question, and that uses its
     * corresponding `trait` implementation.
     *
     * @return string
     */
    public function dummyClassPath() {
        return DummyStringFilePathContainer::class;
    }

    /**
     * Returns the class path of the `interface` in question
     *
     * @return string
     */
    public function mustImplementInterface() {
        return FilePathAware::class;
    }

    /**
     * Returns the class path of the `trait` in question
     *
     * @return string
     */
    public function mustUseTrait() {
        return FilePathTrait::class;
    }
}

class DummyStringFilePathContainer implements FilePathAware {
    use FilePathTrait;
}