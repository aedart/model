<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Location Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\LocationAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait LocationTrait
{
    /**
     * Name or identifier of a location
     *
     * @var int|null
     */
    protected $location = null;

    /**
     * Set location
     *
     * @param int|null $identifier Name or identifier of a location
     *
     * @return self
     */
    public function setLocation(?int $identifier)
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
     * @return int|null location or null if no location has been set
     */
    public function getLocation() : ?int 
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
     * @return int|null Default "location" value or null if no default value is available
     */
    public function getDefaultLocation() : ?int
    {
        return null;
    }
}