<?php namespace Aedart\Model\Contracts\Arrays;

/**
 * <h1>Locations Aware</h1>
 *
 * Component contains a list of locations, which can also
 * be specified. The locations can be relative or absolute
 * paths or perhaps resources (URLs)... etc
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Arrays
 */
interface LocationsAware
{
    /**
     * Set locations
     *
     * @param string[] $locations Locations list
     *
     * @return void
     */
    public function setLocations(array $locations);

    /**
     * Get locations
     *
     * If no "locations" value has been set, this method will
     * set and return a default "locations" value,
     * if any such value is available
     *
     * @see getDefaultLocations()
     *
     * @return string[]|null "locations" value or null if no "locations" value has been set
     */
    public function getLocations();

    /**
     * Get a default "locations" value, if any is available
     *
     * @return string[]|null A default "locations" value or null if no default value is available
     */
    public function getDefaultLocations();

    /**
     * Check if "locations" has been set
     *
     * @return bool True if "locations" value has been set, false if not
     */
    public function hasLocations();

    /**
     * Check if a default "locations" is available or not
     *
     * @return bool True of a default "locations" value is available, false if not
     */
    public function hasDefaultLocations();
}