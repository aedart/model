<?php

namespace Aedart\Model\Contracts\Floats;

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
     * @param float|null $value East-West position on Earth&#039;s surface
     *
     * @return self
     */
    public function setLongitude(?float $value);

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
    public function getLongitude() : ?float ;

    /**
     * Check if "longitude" has been set
     *
     * @return bool True if "longitude" has been set, false if not
     */
    public function hasLongitude() : bool;

    /**
     * Get a default "longitude" value, if any is available
     *
     * @return float|null Default "longitude" value or null if no default value is available
     */
    public function getDefaultLongitude() : ?float;
}