<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Distance Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\DistanceAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait DistanceTrait
{
    /**
     * Distance to or from something
     *
     * @var string|null
     */
    protected $distance = null;

    /**
     * Set distance
     *
     * @param string|null $length Distance to or from something
     *
     * @return self
     */
    public function setDistance(?string $length)
    {
        $this->distance = $length;

        return $this;
    }

    /**
     * Get distance
     *
     * If no "distance" value has been set, this method will
     * set and return a default "distance" value,
     * if any such value is available
     *
     * @see getDefaultDistance()
     *
     * @return string|null distance or null if no distance has been set
     */
    public function getDistance() : ?string 
    {
        if ( ! $this->hasDistance()) {
            $this->setDistance($this->getDefaultDistance());
        }
        return $this->distance;
    }

    /**
     * Check if "distance" has been set
     *
     * @return bool True if "distance" has been set, false if not
     */
    public function hasDistance() : bool
    {
        return isset($this->distance);
    }

    /**
     * Get a default "distance" value, if any is available
     *
     * @return string|null Default "distance" value or null if no default value is available
     */
    public function getDefaultDistance() : ?string
    {
        return null;
    }
}