<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Zone Aware</h1>
 *
 * Component is aware of a string "zone" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ZoneAware
{
    /**
     * Set zone
     *
     * @param string $name Name of an area, district or devision
     *
     * @return void
     */
    public function setZone($name);

    /**
     * Get zone
     *
     * If no "zone" value has been set, this method will
     * set and return a default "zone" value,
     * if any such value is available
     *
     * @see getDefaultZone()
     *
     * @return string|null "zone" value or null if no "zone" value has been set
     */
    public function getZone();

    /**
     * Get a default "zone" value, if any is available
     *
     * @return string|null A default "zone" value or null if no default value is available
     */
    public function getDefaultZone();

    /**
     * Check if "zone" has been set
     *
     * @return bool True if "zone" value has been set, false if not
     */
    public function hasZone();

    /**
     * Check if a default "zone" is available or not
     *
     * @return bool True of a default "zone" value is available, false if not
     */
    public function hasDefaultZone();
}