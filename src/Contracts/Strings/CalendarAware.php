<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $location Location to calendar, e.g. URI, name, ID or other identifier
     *
     * @return self
     */
    public function setCalendar(?string $location);

    /**
     * Get calendar
     *
     * If no "calendar" value has been set, this method will
     * set and return a default "calendar" value,
     * if any such value is available
     *
     * @see getDefaultCalendar()
     *
     * @return string|null calendar or null if no calendar has been set
     */
    public function getCalendar() : ?string ;

    /**
     * Check if "calendar" has been set
     *
     * @return bool True if "calendar" has been set, false if not
     */
    public function hasCalendar() : bool;

    /**
     * Get a default "calendar" value, if any is available
     *
     * @return string|null Default "calendar" value or null if no default value is available
     */
    public function getDefaultCalendar() : ?string;
}