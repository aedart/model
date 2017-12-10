<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Duration Aware</h1>
 *
 * Component is aware of a string "duration" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface DurationAware
{
    /**
     * Set duration
     *
     * @param string|null $amount Duration of some event or media
     *
     * @return self
     */
    public function setDuration(?string $amount);

    /**
     * Get duration
     *
     * If no "duration" value has been set, this method will
     * set and return a default "duration" value,
     * if any such value is available
     *
     * @see getDefaultDuration()
     *
     * @return string|null duration or null if no duration has been set
     */
    public function getDuration() : ?string ;

    /**
     * Check if "duration" has been set
     *
     * @return bool True if "duration" has been set, false if not
     */
    public function hasDuration() : bool;

    /**
     * Get a default "duration" value, if any is available
     *
     * @return string|null Default "duration" value or null if no default value is available
     */
    public function getDefaultDuration() : ?string;
}