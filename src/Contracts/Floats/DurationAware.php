<?php

namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Duration Aware</h1>
 *
 * Component is aware of a float "duration" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface DurationAware
{
    /**
     * Set duration
     *
     * @param float|null $amount Duration of some event or media
     *
     * @return self
     */
    public function setDuration(?float $amount);

    /**
     * Get duration
     *
     * If no "duration" value has been set, this method will
     * set and return a default "duration" value,
     * if any such value is available
     *
     * @see getDefaultDuration()
     *
     * @return float|null duration or null if no duration has been set
     */
    public function getDuration() : ?float ;

    /**
     * Check if "duration" has been set
     *
     * @return bool True if "duration" has been set, false if not
     */
    public function hasDuration() : bool;

    /**
     * Get a default "duration" value, if any is available
     *
     * @return float|null Default "duration" value or null if no default value is available
     */
    public function getDefaultDuration() : ?float;
}