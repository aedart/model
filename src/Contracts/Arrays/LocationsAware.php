<?php

namespace Aedart\Model\Contracts\Arrays;

/**
 * <h1>Locations Aware</h1>
 *
 * Component is aware of a array "locations" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Arrays
 */
interface LocationsAware
{
    /**
     * Set locations
     *
     * @param array|null $list List of locations
     *
     * @return self
     */
    public function setLocations(?array $list);

    /**
     * Get locations
     *
     * If no "locations" value has been set, this method will
     * set and return a default "locations" value,
     * if any such value is available
     *
     * @see getDefaultLocations()
     *
     * @return array|null locations or null if no locations has been set
     */
    public function getLocations() : ?array ;

    /**
     * Check if "locations" has been set
     *
     * @return bool True if "locations" has been set, false if not
     */
    public function hasLocations() : bool;

    /**
     * Get a default "locations" value, if any is available
     *
     * @return array|null Default "locations" value or null if no default value is available
     */
    public function getDefaultLocations() : ?array;
}