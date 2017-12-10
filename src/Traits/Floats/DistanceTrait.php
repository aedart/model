<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Distance Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\DistanceAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait DistanceTrait
{
    /**
     * Distance to or from something
     *
     * @var float|null
     */
    protected $distance = null;

    /**
     * Set distance
     *
     * @param float|null $length Distance to or from something
     *
     * @return self
     */
    public function setDistance(?float $length)
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
     * @return float|null distance or null if no distance has been set
     */
    public function getDistance() : ?float 
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
     * @return float|null Default "distance" value or null if no default value is available
     */
    public function getDefaultDistance() : ?float
    {
        return null;
    }
}