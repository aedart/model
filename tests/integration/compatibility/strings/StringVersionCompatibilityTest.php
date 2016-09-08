<?php

use Aedart\Model\Contracts\Strings\VersionAware;
use Aedart\Model\Traits\Strings\VersionTrait;
use Aedart\Testing\Laravel\TestCases\Integration\InterfaceAndTraitCompatibilityTestCase;

/**
 * StringVersionCompatibilityTest
 *
 * @group compatibility
 * @group strings
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringVersionCompatibilityTest extends InterfaceAndTraitCompatibilityTestCase{

    /**
     * Returns the class path to a class that implements the
     * given `interface` in question, and that uses its
     * corresponding `trait` implementation.
     *
     * @return string
     */
    public function dummyClassPath() {
        return DummyStringVersionContainer::class;
    }

    /**
     * Returns the class path of the `interface` in question
     *
     * @return string
     */
    public function mustImplementInterface() {
        return VersionAware::class;
    }

    /**
     * Returns the class path of the `trait` in question
     *
     * @return string
     */
    public function mustUseTrait() {
        return VersionTrait::class;
    }
}

class DummyStringVersionContainer implements VersionAware  {
    use VersionTrait;
}