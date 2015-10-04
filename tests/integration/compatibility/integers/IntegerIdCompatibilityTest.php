<?php
use Aedart\Model\Contracts\Integers\IdAware;
use Aedart\Model\Traits\Integers\IdTrait;
use Aedart\Testing\Laravel\TestCases\Integration\InterfaceAndTraitCompatibilityTestCase;

/**
 * Class IntegerIdCompatibilityTest
 *
 * @group compatibility
 * @group integers
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class IntegerIdCompatibilityTest extends InterfaceAndTraitCompatibilityTestCase{

    /**
     * Returns the class path to a class that implements the
     * given `interface` in question, and that uses its
     * corresponding `trait` implementation.
     *
     * @return string
     */
    public function dummyClassPath() {
        return DummyIntegerIdContainer::class;
    }

    /**
     * Returns the class path of the `interface` in question
     *
     * @return string
     */
    public function mustImplementInterface() {
        return IdAware::class;
    }

    /**
     * Returns the class path of the `trait` in question
     *
     * @return string
     */
    public function mustUseTrait() {
        return IdTrait::class;
    }
}

class DummyIntegerIdContainer implements IdAware{
    use IdTrait;
}