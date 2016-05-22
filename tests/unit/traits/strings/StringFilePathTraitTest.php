<?php

use Aedart\Model\Traits\Strings\FilePathTrait;
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;

/**
 * Class StringFilePathTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\FilePathTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringFilePathTraitTest extends GetterSetterTraitTestCase
{
    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return FilePathTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'filePath';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setFilePath
     * @covers ::getFilePath
     * @covers ::hasFilePath
     * @covers ::hasDefaultFilePath
     * @covers ::getDefaultFilePath
     */
    public function filePathTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->word . '.' . $this->faker->fileExtension, $this->faker->word . '.' . $this->faker->fileExtension);
    }
}