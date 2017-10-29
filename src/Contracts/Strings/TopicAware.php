<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $name Name of topic
     *
     * @return self
     */
    public function setTopic(?string $name);

    /**
     * Get topic
     *
     * If no "topic" value has been set, this method will
     * set and return a default "topic" value,
     * if any such value is available
     *
     * @see getDefaultTopic()
     *
     * @return string|null topic or null if no topic has been set
     */
    public function getTopic() : ?string ;

    /**
     * Check if "topic" has been set
     *
     * @return bool True if "topic" has been set, false if not
     */
    public function hasTopic() : bool;

    /**
     * Get a default "topic" value, if any is available
     *
     * @return string|null Default "topic" value or null if no default value is available
     */
    public function getDefaultTopic() : ?string;
}