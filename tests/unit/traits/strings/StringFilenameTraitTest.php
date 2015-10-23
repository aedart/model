<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\FilenameTrait;

/**
 * Class StringFilenameTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringFilenameTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return FilenameTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'filename';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setFilename
     * @covers ::getFilename
     * @covers ::hasFilename
     * @covers ::hasDefaultFilename
     * @covers ::getDefaultFilename
     */
    public function filenameTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->word . '.' . $this->faker->fileExtension, $this->faker->word . '.' . $this->faker->fileExtension);
    }
}