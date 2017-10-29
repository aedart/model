<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $question A question that can be asked
     *
     * @return self
     */
    public function setQuestion(?string $question);

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
    public function getQuestion() : ?string ;

    /**
     * Check if "question" has been set
     *
     * @return bool True if "question" has been set, false if not
     */
    public function hasQuestion() : bool;

    /**
     * Get a default "question" value, if any is available
     *
     * @return string|null Default "question" value or null if no default value is available
     */
    public function getDefaultQuestion() : ?string;
}