<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Question Trait</h1>
 *
 * @see Aedart\Model\Contracts\Strings\QuestionAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait QuestionTrait
{
    /**
     * A question
     *
     * @var string|null
     */
    protected $question = null;

    /**
     * Set the given question
     *
     * @param string $questionToAsk A question
     *
     * @return void
     */
    public function setQuestion($questionToAsk)
    {
        $this->question = $questionToAsk;
    }

    /**
     * Get the given question
     *
     * If no question has been set, this method will
     * set and return a default question, if any such
     * value is available
     *
     * @see getDefaultQuestion()
     *
     * @return string|null question or null if none question has been set
     */
    public function getQuestion()
    {
        if (!$this->hasQuestion() && $this->hasDefaultQuestion()) {
            $this->setQuestion($this->getDefaultQuestion());
        }
        return $this->question;
    }

    /**
     * Get a default question value, if any is available
     *
     * @return string|null A default question value or Null if no default value is available
     */
    public function getDefaultQuestion()
    {
        return null;
    }

    /**
     * Check if question has been set
     *
     * @return bool True if question has been set, false if not
     */
    public function hasQuestion()
    {
        return !is_null($this->question);
    }

    /**
     * Check if a default question is available or not
     *
     * @return bool True of a default question is available, false if not
     */
    public function hasDefaultQuestion()
    {
        return !is_null($this->getDefaultQuestion());
    }
}