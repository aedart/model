<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $question A question that can be asked
     *
     * @return self
     */
    public function setQuestion(?string $question)
    {
        $this->question = $question;

        return $this;
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
     * @return string|null question or null if no question has been set
     */
    public function getQuestion() : ?string 
    {
        if ( ! $this->hasQuestion()) {
            $this->setQuestion($this->getDefaultQuestion());
        }
        return $this->question;
    }

    /**
     * Check if "question" has been set
     *
     * @return bool True if "question" has been set, false if not
     */
    public function hasQuestion() : bool
    {
        return isset($this->question);
    }

    /**
     * Get a default "question" value, if any is available
     *
     * @return string|null Default "question" value or null if no default value is available
     */
    public function getDefaultQuestion() : ?string
    {
        return null;
    }
}