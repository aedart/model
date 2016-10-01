<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Question Aware</h1>
 *
 * Component is aware of a string "question" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface QuestionAware
{
    /**
     * Set question
     *
     * @param string $questionToAsk A question that can be asked
     *
     * @return void
     */
    public function setQuestion($questionToAsk);

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
    public function getQuestion();

    /**
     * Get a default "question" value, if any is available
     *
     * @return string|null A default "question" value or null if no default value is available
     */
    public function getDefaultQuestion();

    /**
     * Check if "question" has been set
     *
     * @return bool True if "question" value has been set, false if not
     */
    public function hasQuestion();

    /**
     * Check if a default "question" is available or not
     *
     * @return bool True of a default "question" value is available, false if not
     */
    public function hasDefaultQuestion();
}