<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\UrlTrait;

/**
 * Class StringUrlTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\UrlTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringUrlTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return UrlTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'url';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setUrl
     * @covers ::getUrl
     * @covers ::hasUrl
     * @covers ::hasDefaultUrl
     * @covers ::getDefaultUrl
     */
    public function urlTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->url, $this->faker->url);
    }
}