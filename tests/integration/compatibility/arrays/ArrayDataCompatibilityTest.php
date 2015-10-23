<?php
use Aedart\Model\Contracts\Arrays\DataAware;
use Aedart\Model\Traits\Arrays\DataTrait;
use Aedart\Testing\Laravel\TestCases\Integration\InterfaceAndTraitCompatibilityTestCase;

/**
 * Class ArrayDataCompatibilityTest
 *
 * @group compatibility
 * @group arrays
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class ArrayDataCompatibilityTest extends InterfaceAndTraitCompatibilityTestCase{

    /**
     * Returns the class path to a class that implements the
     * given `interface` in question, and that uses its
     * corresponding `trait` implementation.
     *
     * @return string
     */
    public function dummyClassPath() {
        return DummyArrayDataContainer::class;
    }

    /**
     * Returns the class path of the `interface` in question
     *
     * @return string
     */
    public function mustImplementInterface() {
        return DataAware::class;
    }

    /**
     * Returns the class path of the `trait` in question
     *
     * @return string
     */
    public function mustUseTrait() {
        return DataTrait::class;
    }
}

class DummyArrayDataContainer implements DataAware {
    use DataTrait;
}