<?php

namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Latitude Aware</h1>
 *
 * Component is aware of a float "latitude" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface LatitudeAware
{
    /**
     * Set latitude
     *
     * @param float|null $value North-South position on Earth&#039;s surface
     *
     * @return self
     */
    public function setLatitude(?float $value);

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
    public function getLatitude() : ?float ;

    /**
     * Check if "latitude" has been set
     *
     * @return bool True if "latitude" has been set, false if not
     */
    public function hasLatitude() : bool;

    /**
     * Get a default "latitude" value, if any is available
     *
     * @return float|null Default "latitude" value or null if no default value is available
     */
    public function getDefaultLatitude() : ?float;
}