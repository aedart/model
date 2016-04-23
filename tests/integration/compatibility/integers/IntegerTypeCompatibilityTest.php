<?php

use Aedart\Model\Contracts\Integers\TypeAware;
use Aedart\Model\Traits\Integers\TypeTrait;
use Aedart\Testing\Laravel\TestCases\Integration\InterfaceAndTraitCompatibilityTestCase;

/**
 * Class IntegerTypeCompatibilityTest
 *
 * @group compatibility
 * @group integers
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class IntegerTypeCompatibilityTest extends InterfaceAndTraitCompatibilityTestCase
{

    /**
     * Returns the class path to a class that implements the
     * given `interface` in question, and that uses its
     * corresponding `trait` implementation.
     *
     * @return string
     */
    public function dummyClassPath() {
        return DummyIntegerTypeContainer::class;
    }

    /**
     * Returns the class path of the `interface` in question
     *
     * @return string
     */
    public function mustImplementInterface() {
        return TypeAware::class;
    }

    /**
     * Returns the class path of the `trait` in question
     *
     * @return string
     */
    public function mustUseTrait() {
        return TypeTrait::class;
    }
}

class DummyIntegerTypeContainer implements TypeAware{
    use TypeTrait;
}