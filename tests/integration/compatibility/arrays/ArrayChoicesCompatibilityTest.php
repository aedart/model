<?php

use Aedart\Model\Contracts\Arrays\ChoicesAware;
use Aedart\Model\Traits\Arrays\ChoicesTrait;
use Aedart\Testing\Laravel\TestCases\Integration\InterfaceAndTraitCompatibilityTestCase;

/**
 * Class ArrayChoicesCompatibilityTest
 *
 * @group compatibility
 * @group arrays
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class ArrayChoicesCompatibilityTest extends InterfaceAndTraitCompatibilityTestCase
{

    /**
     * Returns the class path to a class that implements the
     * given `interface` in question, and that uses its
     * corresponding `trait` implementation.
     *
     * @return string
     */
    public function dummyClassPath() {
        return DummyArrayChoicesContainer::class;
    }

    /**
     * Returns the class path of the `interface` in question
     *
     * @return string
     */
    public function mustImplementInterface() {
        return ChoicesAware::class;
    }

    /**
     * Returns the class path of the `trait` in question
     *
     * @return string
     */
    public function mustUseTrait() {
        return ChoicesTrait::class;
    }
}

class DummyArrayChoicesContainer implements ChoicesAware {
    use ChoicesTrait;
}