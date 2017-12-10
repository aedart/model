<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Location Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\LocationAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait LocationTrait
{
    /**
     * Name or identifier of a location
     *
     * @var string|null
     */
    protected $location = null;

    /**
     * Set location
     *
     * @param string|null $identifier Name or identifier of a location
     *
     * @return self
     */
    public function setLocation(?string $identifier)
    {
        $this->location = $identifier;

        return $this;
    }

    /**
     * Get location
     *
     * If no "location" value has been set, this method will
     * set and return a default "location" value,
     * if any such value is available
     *
     * @see getDefaultLocation()
     *
     * @return string|null location or null if no location has been set
     */
    public function getLocation() : ?string 
    {
        if ( ! $this->hasLocation()) {
            $this->setLocation($this->getDefaultLocation());
        }
        return $this->location;
    }

    /**
     * Check if "location" has been set
     *
     * @return bool True if "location" has been set, false if not
     */
    public function hasLocation() : bool
    {
        return isset($this->location);
    }

    /**
     * Get a default "location" value, if any is available
     *
     * @return string|null Default "location" value or null if no default value is available
     */
    public function getDefaultLocation() : ?string
    {
        return null;
    }
}