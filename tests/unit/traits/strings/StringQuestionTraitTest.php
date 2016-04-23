<?php

use Aedart\Model\Traits\Strings\QuestionTrait;
use Aedart\Testing\Laravel\TestCases\unit\GetterSetterTraitTestCase;

/**
 * Class StringQuestionTraitTest
 *
 * @group traits
 * @group strings
 * @coversDefaultClass Aedart\Model\Traits\Strings\QuestionTrait
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 */
class StringQuestionTraitTest extends GetterSetterTraitTestCase
{

    /**
     * Returns the class path to the trait in question
     *
     * @return string
     */
    public function getTraitClassPath() {
        return QuestionTrait::class;
    }

    /**
     * Returns the name of the property, which the given
     * trait has implemented its getter and setter methods
     *
     * @return string
     */
    public function propertyName() {
        return 'question';
    }

    /***********************************************************
     * Actual tests
     **********************************************************/

    /**
     * @test
     *
     * @covers ::setQuestion
     * @covers ::getQuestion
     * @covers ::hasQuestion
     * @covers ::hasDefaultQuestion
     * @covers ::getDefaultQuestion
     */
    public function QuestionTraitMethods(){
        $this->assertGetterSetterTraitMethods($this->faker->sentence, $this->faker->sentence);
    }

}