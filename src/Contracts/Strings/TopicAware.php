<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Topic Aware</h1>
 *
 * Component is aware of a string "topic" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface TopicAware
{
    /**
     * Set topic
     *
     * @param string $topic Topic
     *
     * @return void
     */
    public function setTopic($topic);

    /**
     * Get topic
     *
     * If no "topic" value has been set, this method will
     * set and return a default "topic" value,
     * if any such value is available
     *
     * @see getDefaultTopic()
     *
     * @return string|null "topic" value or null if no "topic" value has been set
     */
    public function getTopic();

    /**
     * Get a default "topic" value, if any is available
     *
     * @return string|null A default "topic" value or null if no default value is available
     */
    public function getDefaultTopic();

    /**
     * Check if "topic" has been set
     *
     * @return bool True if "topic" value has been set, false if not
     */
    public function hasTopic();

    /**
     * Check if a default "topic" is available or not
     *
     * @return bool True of a default "topic" value is available, false if not
     */
    public function hasDefaultTopic();
}