<?php
namespace Aedart\Model\Traits\Arrays;

/**
 * Locations Trait
 *
 * @see \Aedart\Model\Contracts\Arrays\LocationsAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Arrays
 */
trait LocationsTrait
{
    /**
     * Locations list
     *
     * @var string[]|null
     */
    protected $locations = null;

    /**
     * Set the given locations
     *
     * @param string[] $locations Locations list
     *
     * @return void
     */
    public function setLocations(array $locations)
    {
        $this->locations = $locations;
    }

    /**
     * Get the given locations
     *
     * If no locations has been set, this method will
     * set and return a default locations, if any such
     * value is available
     *
     * @see getDefaultLocations()
     *
     * @return string[]|null locations or null if none locations has been set
     */
    public function getLocations()
    {
        if (!$this->hasLocations() && $this->hasDefaultLocations()) {
            $this->setLocations($this->getDefaultLocations());
        }
        return $this->locations;
    }

    /**
     * Get a default locations value, if any is available
     *
     * @return string[]|null A default locations value or Null if no default value is available
     */
    public function getDefaultLocations()
    {
        return null;
    }

    /**
     * Check if locations has been set
     *
     * @return bool True if locations has been set, false if not
     */
    public function hasLocations()
    {
        return !is_null($this->locations);
    }

    /**
     * Check if a default locations is available or not
     *
     * @return bool True of a default locations is available, false if not
     */
    public function hasDefaultLocations()
    {
        return !is_null($this->getDefaultLocations());
    }
}