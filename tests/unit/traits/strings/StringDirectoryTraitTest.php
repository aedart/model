<?php

use Aedart\Model\Traits\Strings\DirectoryTrait;
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;

/**
 * Class StringDirectoryTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\DirectoryTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringDirectoryTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return DirectoryTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'directory';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setDirectory
     * @covers ::getDirectory
     * @covers ::hasDirectory
     * @covers ::hasDefaultDirectory
     * @covers ::getDefaultDirectory
     */
    public function directoryTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->word, $this->faker->word);
    }
}