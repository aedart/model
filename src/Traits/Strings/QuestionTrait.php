<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Question Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\QuestionAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait QuestionTrait
{
    /**
     * A question that can be asked
     *
     * @var string|null
     */
    protected $question = null;

    /**
     * Set question
     *
     * @param string $questionToAsk A question that can be asked
     *
     * @return void
     */
    public function setQuestion($questionToAsk)
    {
        $this->question = (string) $questionToAsk;
    }

    /**
     * Get question
     *
     * If no "question" value has been set, this method will
     * set and return a default "question" value,
     * if any such value is available
     *
     * @see getDefaultQuestion()
     *
     * @return string|null "question" value or null if no "question" value has been set
     */
    public function getQuestion()
    {
        if (!$this->hasQuestion() && $this->hasDefaultQuestion()) {
            $this->setQuestion($this->getDefaultQuestion());
        }
        return $this->question;
    }

    /**
     * Get a default "question" value, if any is available
     *
     * @return string|null A default "question" value or null if no default value is available
     */
    public function getDefaultQuestion()
    {
        return null;
    }

    /**
     * Check if "question" has been set
     *
     * @return bool True if "question" value has been set, false if not
     */
    public function hasQuestion()
    {
        return isset($this->question);
    }

    /**
     * Check if a default "question" is available or not
     *
     * @return bool True of a default "question" value is available, false if not
     */
    public function hasDefaultQuestion()
    {
        $default = $this->getDefaultQuestion();
        return isset($default);
    }
}