<?php

namespace Aedart\Model\Contracts\Integers;

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
     * @param int|null $timestamp Unix timestamp
     *
     * @return self
     */
    public function setTimestamp(?int $timestamp);

    /**
     * Get timestamp
     *
     * If no "timestamp" value has been set, this method will
     * set and return a default "timestamp" value,
     * if any such value is available
     *
     * @see getDefaultTimestamp()
     *
     * @return int|null timestamp or null if no timestamp has been set
     */
    public function getTimestamp() : ?int ;

    /**
     * Check if "timestamp" has been set
     *
     * @return bool True if "timestamp" has been set, false if not
     */
    public function hasTimestamp() : bool;

    /**
     * Get a default "timestamp" value, if any is available
     *
     * @return int|null Default "timestamp" value or null if no default value is available
     */
    public function getDefaultTimestamp() : ?int;
}