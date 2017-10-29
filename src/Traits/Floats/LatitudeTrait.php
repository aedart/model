<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Latitude Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\LatitudeAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait LatitudeTrait
{
    /**
     * North-South position on Earth&#039;s surface
     *
     * @var float|null
     */
    protected $latitude = null;

    /**
     * Set latitude
     *
     * @param float|null $value North-South position on Earth&#039;s surface
     *
     * @return self
     */
    public function setLatitude(?float $value)
    {
        $this->latitude = $value;

        return $this;
    }

    /**
     * Get latitude
     *
     * If no "latitude" value has been set, this method will
     * set and return a default "latitude" value,
     * if any such value is available
     *
     * @see getDefaultLatitude()
     *
     * @return float|null latitude or null if no latitude has been set
     */
    public function getLatitude() : ?float 
    {
        if ( ! $this->hasLatitude()) {
            $this->setLatitude($this->getDefaultLatitude());
        }
        return $this->latitude;
    }

    /**
     * Check if "latitude" has been set
     *
     * @return bool True if "latitude" has been set, false if not
     */
    public function hasLatitude() : bool
    {
        return isset($this->latitude);
    }

    /**
     * Get a default "latitude" value, if any is available
     *
     * @return float|null Default "latitude" value or null if no default value is available
     */
    public function getDefaultLatitude() : ?float
    {
        return null;
    }
}