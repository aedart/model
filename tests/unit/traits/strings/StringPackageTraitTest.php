<?php
use Aedart\Model\Traits\Strings\PackageTrait;
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;

/**
 * Class StringPackageTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\PackageTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringPackageTraitTest extends GetterSetterTraitTestCase
{
    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath()
    {
        return PackageTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName()
    {
        return 'package';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setPackage
     * @covers ::getPackage
     * @covers ::hasPackage
     * @covers ::hasDefaultPackage
     * @covers ::getDefaultPackage
     */
    public function packageTraitMethods()
    {
        $this->assertGetterSetterTraitMethods($this->faker->word, $this->faker->word);
    }
}