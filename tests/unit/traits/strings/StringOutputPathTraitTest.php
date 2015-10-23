<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\OutputPathTrait;

/**
 * Class StringOutputPathTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\OutputPathTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringOutputPathTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return OutputPathTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'outputPath';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setOutputPath
     * @covers ::getOutputPath
     * @covers ::hasOutputPath
     * @covers ::hasDefaultOutputPath
     * @covers ::getDefaultOutputPath
     */
    public function outputPathTraitMethods(){
        $this->assertGetterSetterTraitMethods('usr/share/output/', 'var/www/tmp/');
    }
}