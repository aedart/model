<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Start Date Aware</h1>
 *
 * Component is aware of a int "start date" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface StartDateAware
{
    /**
     * Set start date
     *
     * @param int $date Start date (UNIX timestamp) of some kind of event
     *
     * @return void
     */
    public function setStartDate($date);

    /**
     * Get start date
     *
     * If no "start date" value has been set, this method will
     * set and return a default "start date" value,
     * if any such value is available
     *
     * @see getDefaultStartDate()
     *
     * @return int|null "start date" value or null if no "start date" value has been set
     */
    public function getStartDate();

    /**
     * Get a default "start date" value, if any is available
     *
     * @return int|null A default "start date" value or null if no default value is available
     */
    public function getDefaultStartDate();

    /**
     * Check if "start date" has been set
     *
     * @return bool True if "start date" value has been set, false if not
     */
    public function hasStartDate();

    /**
     * Check if a default "start date" is available or not
     *
     * @return bool True of a default "start date" value is available, false if not
     */
    public function hasDefaultStartDate();
}