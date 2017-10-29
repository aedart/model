<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Country Aware</h1>
 *
 * Component is aware of a string "country" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface CountryAware
{
    /**
     * Set country
     *
     * @param string|null $name Name of country, e.g. Denmark, United Kingdom, Australia...etc
     *
     * @return self
     */
    public function setCountry(?string $name);

    /**
     * Get country
     *
     * If no "country" value has been set, this method will
     * set and return a default "country" value,
     * if any such value is available
     *
     * @see getDefaultCountry()
     *
     * @return string|null country or null if no country has been set
     */
    public function getCountry() : ?string ;

    /**
     * Check if "country" has been set
     *
     * @return bool True if "country" has been set, false if not
     */
    public function hasCountry() : bool;

    /**
     * Get a default "country" value, if any is available
     *
     * @return string|null Default "country" value or null if no default value is available
     */
    public function getDefaultCountry() : ?string;
}