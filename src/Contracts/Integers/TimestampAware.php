<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Timestamp Aware</h1>
 *
 * Component is aware of a int "timestamp" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface TimestampAware
{
    /**
     * Set timestamp
     *
     * @param int $timestamp Unix timestamp
     *
     * @return void
     */
    public function setTimestamp($timestamp);

    /**
     * Get timestamp
     *
     * If no "timestamp" value has been set, this method will
     * set and return a default "timestamp" value,
     * if any such value is available
     *
     * @see getDefaultTimestamp()
     *
     * @return int|null "timestamp" value or null if no "timestamp" value has been set
     */
    public function getTimestamp();

    /**
     * Get a default "timestamp" value, if any is available
     *
     * @return int|null A default "timestamp" value or null if no default value is available
     */
    public function getDefaultTimestamp();

    /**
     * Check if "timestamp" has been set
     *
     * @return bool True if "timestamp" value has been set, false if not
     */
    public function hasTimestamp();

    /**
     * Check if a default "timestamp" is available or not
     *
     * @return bool True of a default "timestamp" value is available, false if not
     */
    public function hasDefaultTimestamp();
}