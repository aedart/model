<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Latitude Aware</h1>
 *
 * Component is aware of a string "latitude" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface LatitudeAware
{
    /**
     * Set latitude
     *
     * @param string $degree North-South position on Earth's surface
     *
     * @return void
     */
    public function setLatitude($degree);

    /**
     * Get latitude
     *
     * If no "latitude" value has been set, this method will
     * set and return a default "latitude" value,
     * if any such value is available
     *
     * @see getDefaultLatitude()
     *
     * @return string|null "latitude" value or null if no "latitude" value has been set
     */
    public function getLatitude();

    /**
     * Get a default "latitude" value, if any is available
     *
     * @return string|null A default "latitude" value or null if no default value is available
     */
    public function getDefaultLatitude();

    /**
     * Check if "latitude" has been set
     *
     * @return bool True if "latitude" value has been set, false if not
     */
    public function hasLatitude();

    /**
     * Check if a default "latitude" is available or not
     *
     * @return bool True of a default "latitude" value is available, false if not
     */
    public function hasDefaultLatitude();
}