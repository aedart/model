<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $name Name of a country, e.g. Denmark, United Kingdom, Australia...etc
     *
     * @return void
     */
    public function setCountry($name);

    /**
     * Get country
     *
     * If no "country" value has been set, this method will
     * set and return a default "country" value,
     * if any such value is available
     *
     * @see getDefaultCountry()
     *
     * @return string|null "country" value or null if no "country" value has been set
     */
    public function getCountry();

    /**
     * Get a default "country" value, if any is available
     *
     * @return string|null A default "country" value or null if no default value is available
     */
    public function getDefaultCountry();

    /**
     * Check if "country" has been set
     *
     * @return bool True if "country" value has been set, false if not
     */
    public function hasCountry();

    /**
     * Check if a default "country" is available or not
     *
     * @return bool True of a default "country" value is available, false if not
     */
    public function hasDefaultCountry();
}