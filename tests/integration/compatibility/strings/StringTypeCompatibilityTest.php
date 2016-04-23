<?php

use Aedart\Model\Contracts\Strings\TypeAware;
use Aedart\Model\Traits\Strings\TypeTrait;
use Aedart\Testing\Laravel\TestCases\Integration\InterfaceAndTraitCompatibilityTestCase;

/**
 * Class StringTypeCompatibilityTest
 *
 * @group compatibility
 * @group strings
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringTypeCompatibilityTest extends InterfaceAndTraitCompatibilityTestCase
{

    /**
     * Returns the class path to a class that implements the
     * given `interface` in question, and that uses its
     * corresponding `trait` implementation.
     *
     * @return string
     */
    public function dummyClassPath()
    {
        return DummyStringTypeContainer::class;
    }

    /**
     * Returns the class path of the `interface` in question
     *
     * @return string
     */
    public function mustImplementInterface()
    {
        return TypeAware::class;
    }

    /**
     * Returns the class path of the `trait` in question
     *
     * @return string
     */
    public function mustUseTrait()
    {
        return TypeTrait::class;
    }
}

class DummyStringTypeContainer implements TypeAware
{
    use TypeTrait;
}