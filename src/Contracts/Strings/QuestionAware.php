<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Question Aware</h1>
 *
 * Components contains a question that can be asked or
 * displayed
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface QuestionAware
{
    /**
     * Set the given question
     *
     * @param string $questionToAsk A question
     *
     * @return void
     */
    public function setQuestion($questionToAsk);

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
    public function getQuestion();

    /**
     * Get a default question value, if any is available
     *
     * @return string|null A default question value or Null if no default value is available
     */
    public function getDefaultQuestion();

    /**
     * Check if question has been set
     *
     * @return bool True if question has been set, false if not
     */
    public function hasQuestion();

    /**
     * Check if a default question is available or not
     *
     * @return bool True of a default question is available, false if not
     */
    public function hasDefaultQuestion();
}