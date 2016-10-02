<?php namespace Aedart\Model\Traits\Floats;

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
     * East-West position on Earth's surface
     *
     * @var float|null
     */
    protected $longitude = null;

    /**
     * Set longitude
     *
     * @param float $value East-West position on Earth's surface
     *
     * @return void
     */
    public function setLongitude($value)
    {
        $this->longitude = (float) $value;
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
     * @return float|null "longitude" value or null if no "longitude" value has been set
     */
    public function getLongitude()
    {
        if (!$this->hasLongitude() && $this->hasDefaultLongitude()) {
            $this->setLongitude($this->getDefaultLongitude());
        }
        return $this->longitude;
    }

    /**
     * Get a default "longitude" value, if any is available
     *
     * @return float|null A default "longitude" value or null if no default value is available
     */
    public function getDefaultLongitude()
    {
        return null;
    }

    /**
     * Check if "longitude" has been set
     *
     * @return bool True if "longitude" value has been set, false if not
     */
    public function hasLongitude()
    {
        return isset($this->longitude);
    }

    /**
     * Check if a default "longitude" is available or not
     *
     * @return bool True of a default "longitude" value is available, false if not
     */
    public function hasDefaultLongitude()
    {
        $default = $this->getDefaultLongitude();
        return isset($default);
    }
}