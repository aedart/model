<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $name Name of a city, town or village
     *
     * @return void
     */
    public function setCity($name);

    /**
     * Get city
     *
     * If no "city" value has been set, this method will
     * set and return a default "city" value,
     * if any such value is available
     *
     * @see getDefaultCity()
     *
     * @return string|null "city" value or null if no "city" value has been set
     */
    public function getCity();

    /**
     * Get a default "city" value, if any is available
     *
     * @return string|null A default "city" value or null if no default value is available
     */
    public function getDefaultCity();

    /**
     * Check if "city" has been set
     *
     * @return bool True if "city" value has been set, false if not
     */
    public function hasCity();

    /**
     * Check if a default "city" is available or not
     *
     * @return bool True of a default "city" value is available, false if not
     */
    public function hasDefaultCity();
}