<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>City Aware</h1>
 *
 * Component is aware of a string "city" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface CityAware
{
    /**
     * Set city
     *
     * @param string|null $name Name of city, town or village
     *
     * @return self
     */
    public function setCity(?string $name);

    /**
     * Get city
     *
     * If no "city" value has been set, this method will
     * set and return a default "city" value,
     * if any such value is available
     *
     * @see getDefaultCity()
     *
     * @return string|null city or null if no city has been set
     */
    public function getCity() : ?string ;

    /**
     * Check if "city" has been set
     *
     * @return bool True if "city" has been set, false if not
     */
    public function hasCity() : bool;

    /**
     * Get a default "city" value, if any is available
     *
     * @return string|null Default "city" value or null if no default value is available
     */
    public function getDefaultCity() : ?string;
}