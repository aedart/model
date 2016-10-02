<?php namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Longitude Aware</h1>
 *
 * Component is aware of a float "longitude" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface LongitudeAware
{
    /**
     * Set longitude
     *
     * @param float $value East-West position on Earth's surface
     *
     * @return void
     */
    public function setLongitude($value);

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
    public function getLongitude();

    /**
     * Get a default "longitude" value, if any is available
     *
     * @return float|null A default "longitude" value or null if no default value is available
     */
    public function getDefaultLongitude();

    /**
     * Check if "longitude" has been set
     *
     * @return bool True if "longitude" value has been set, false if not
     */
    public function hasLongitude();

    /**
     * Check if a default "longitude" is available or not
     *
     * @return bool True of a default "longitude" value is available, false if not
     */
    public function hasDefaultLongitude();
}