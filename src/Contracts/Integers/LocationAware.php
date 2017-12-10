<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Location Aware</h1>
 *
 * Component is aware of a int "location" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface LocationAware
{
    /**
     * Set location
     *
     * @param int|null $identifier Name or identifier of a location
     *
     * @return self
     */
    public function setLocation(?int $identifier);

    /**
     * Get location
     *
     * If no "location" value has been set, this method will
     * set and return a default "location" value,
     * if any such value is available
     *
     * @see getDefaultLocation()
     *
     * @return int|null location or null if no location has been set
     */
    public function getLocation() : ?int ;

    /**
     * Check if "location" has been set
     *
     * @return bool True if "location" has been set, false if not
     */
    public function hasLocation() : bool;

    /**
     * Get a default "location" value, if any is available
     *
     * @return int|null Default "location" value or null if no default value is available
     */
    public function getDefaultLocation() : ?int;
}