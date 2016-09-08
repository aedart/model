<?php

use Aedart\Model\Contracts\Arrays\LocationsAware;
use Aedart\Model\Traits\Arrays\LocationsTrait;
use Aedart\Testing\Laravel\TestCases\Integration\InterfaceAndTraitCompatibilityTestCase;

/**
 * ArrayLocationsCompatibilityTest
 *
 * @group compatibility
 * @group arrays
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class ArrayLocationsCompatibilityTest extends InterfaceAndTraitCompatibilityTestCase{

    /**
     * Returns the class path to a class that implements the
     * given `interface` in question, and that uses its
     * corresponding `trait` implementation.
     *
     * @return string
     */
    public function dummyClassPath() {
        return DummyArrayLocationsContainer::class;
    }

    /**
     * Returns the class path of the `interface` in question
     *
     * @return string
     */
    public function mustImplementInterface() {
        return LocationsAware::class;
    }

    /**
     * Returns the class path of the `trait` in question
     *
     * @return string
     */
    public function mustUseTrait() {
        return LocationsTrait::class;
    }
}

class DummyArrayLocationsContainer implements LocationsAware  {
    use LocationsTrait;
}