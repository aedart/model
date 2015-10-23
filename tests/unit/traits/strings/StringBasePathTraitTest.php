<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\BasePathTrait;

/**
 * Class StringBasePathTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\BasePathTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringBasePathTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return BasePathTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'basePath';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setBasePath
     * @covers ::getBasePath
     * @covers ::hasBasePath
     * @covers ::hasDefaultBasePath
     * @covers ::getDefaultBasePath
     */
    public function basePathTraitMethods(){
        $this->assertGetterSetterTraitMethods('usr/share/', 'home/www/my-web/');
    }
}