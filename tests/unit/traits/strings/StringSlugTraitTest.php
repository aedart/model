<?php
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;
use Aedart\Model\Traits\Strings\SlugTrait;

/**
 * Class StringSlugTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\SlugTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringSlugTraitTest extends GetterSetterTraitTestCase{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return SlugTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'slug';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setSlug
     * @covers ::getSlug
     * @covers ::hasSlug
     * @covers ::hasDefaultSlug
     * @covers ::getDefaultSlug
     */
    public function slugTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->slug, $this->faker->slug);
    }
}