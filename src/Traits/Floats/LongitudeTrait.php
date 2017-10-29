<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Longitude Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\LongitudeAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait LongitudeTrait
{
    /**
     * East-West position on Earth&#039;s surface
     *
     * @var float|null
     */
    protected $longitude = null;

    /**
     * Set longitude
     *
     * @param float|null $value East-West position on Earth&#039;s surface
     *
     * @return self
     */
    public function setLongitude(?float $value)
    {
        $this->longitude = $value;

        return $this;
    }

    /**
     * Get longitude
     *
     * If no "longitude" value has been set, this method will
     * set and return a default "longitude" value,
     * if any such value is available
     *
     * @see getDefaultLongitude()
     *
     * @return float|null longitude or null if no longitude has been set
     */
    public function getLongitude() : ?float 
    {
        if ( ! $this->hasLongitude()) {
            $this->setLongitude($this->getDefaultLongitude());
        }
        return $this->longitude;
    }

    /**
     * Check if "longitude" has been set
     *
     * @return bool True if "longitude" has been set, false if not
     */
    public function hasLongitude() : bool
    {
        return isset($this->longitude);
    }

    /**
     * Get a default "longitude" value, if any is available
     *
     * @return float|null Default "longitude" value or null if no default value is available
     */
    public function getDefaultLongitude() : ?float
    {
        return null;
    }
}