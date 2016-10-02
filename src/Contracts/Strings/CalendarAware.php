<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Calendar Aware</h1>
 *
 * Component is aware of a string "calendar" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface CalendarAware
{
    /**
     * Set calendar
     *
     * @param string $location Location to a calendar, e.g. URI, name, ID or other identifier
     *
     * @return void
     */
    public function setCalendar($location);

    /**
     * Get calendar
     *
     * If no "calendar" value has been set, this method will
     * set and return a default "calendar" value,
     * if any such value is available
     *
     * @see getDefaultCalendar()
     *
     * @return string|null "calendar" value or null if no "calendar" value has been set
     */
    public function getCalendar();

    /**
     * Get a default "calendar" value, if any is available
     *
     * @return string|null A default "calendar" value or null if no default value is available
     */
    public function getDefaultCalendar();

    /**
     * Check if "calendar" has been set
     *
     * @return bool True if "calendar" value has been set, false if not
     */
    public function hasCalendar();

    /**
     * Check if a default "calendar" is available or not
     *
     * @return bool True of a default "calendar" value is available, false if not
     */
    public function hasDefaultCalendar();
}