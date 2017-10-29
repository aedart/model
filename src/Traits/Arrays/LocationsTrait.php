<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Arrays;

/**
 * <h1>Locations Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Arrays\LocationsAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Arrays
 */
trait LocationsTrait
{
    /**
     * List of locations
     *
     * @var array|null
     */
    protected $locations = null;

    /**
     * Set locations
     *
     * @param array|null $list List of locations
     *
     * @return self
     */
    public function setLocations(?array $list)
    {
        $this->locations = $list;

        return $this;
    }

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
    public function getLocations() : ?array 
    {
        if ( ! $this->hasLocations()) {
            $this->setLocations($this->getDefaultLocations());
        }
        return $this->locations;
    }

    /**
     * Check if "locations" has been set
     *
     * @return bool True if "locations" has been set, false if not
     */
    public function hasLocations() : bool
    {
        return isset($this->locations);
    }

    /**
     * Get a default "locations" value, if any is available
     *
     * @return array|null Default "locations" value or null if no default value is available
     */
    public function getDefaultLocations() : ?array
    {
        return null;
    }
}