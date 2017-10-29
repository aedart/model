<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Area Aware</h1>
 *
 * Component is aware of a string "area" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface AreaAware
{
    /**
     * Set area
     *
     * @param string|null $name Name of area, e.g. in a building, in a city, outside the city, ...etc
     *
     * @return self
     */
    public function setArea(?string $name);

    /**
     * Get area
     *
     * If no "area" value has been set, this method will
     * set and return a default "area" value,
     * if any such value is available
     *
     * @see getDefaultArea()
     *
     * @return string|null area or null if no area has been set
     */
    public function getArea() : ?string ;

    /**
     * Check if "area" has been set
     *
     * @return bool True if "area" has been set, false if not
     */
    public function hasArea() : bool;

    /**
     * Get a default "area" value, if any is available
     *
     * @return string|null Default "area" value or null if no default value is available
     */
    public function getDefaultArea() : ?string;
}