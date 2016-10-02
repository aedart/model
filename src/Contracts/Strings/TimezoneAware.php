<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Timezone Aware</h1>
 *
 * Component is aware of a string "timezone" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface TimezoneAware
{
    /**
     * Set timezone
     *
     * @param string $name Name of the timezone
     *
     * @return void
     */
    public function setTimezone($name);

    /**
     * Get timezone
     *
     * If no "timezone" value has been set, this method will
     * set and return a default "timezone" value,
     * if any such value is available
     *
     * @see getDefaultTimezone()
     *
     * @return string|null "timezone" value or null if no "timezone" value has been set
     */
    public function getTimezone();

    /**
     * Get a default "timezone" value, if any is available
     *
     * @return string|null A default "timezone" value or null if no default value is available
     */
    public function getDefaultTimezone();

    /**
     * Check if "timezone" has been set
     *
     * @return bool True if "timezone" value has been set, false if not
     */
    public function hasTimezone();

    /**
     * Check if a default "timezone" is available or not
     *
     * @return bool True of a default "timezone" value is available, false if not
     */
    public function hasDefaultTimezone();
}