<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Date Aware</h1>
 *
 * Component is aware of a string "date" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface DateAware
{
    /**
     * Set date
     *
     * @param string $date Date
     *
     * @return void
     */
    public function setDate($date);

    /**
     * Get date
     *
     * If no "date" value has been set, this method will
     * set and return a default "date" value,
     * if any such value is available
     *
     * @see getDefaultDate()
     *
     * @return string|null "date" value or null if no "date" value has been set
     */
    public function getDate();

    /**
     * Get a default "date" value, if any is available
     *
     * @return string|null A default "date" value or null if no default value is available
     */
    public function getDefaultDate();

    /**
     * Check if "date" has been set
     *
     * @return bool True if "date" value has been set, false if not
     */
    public function hasDate();

    /**
     * Check if a default "date" is available or not
     *
     * @return bool True of a default "date" value is available, false if not
     */
    public function hasDefaultDate();
}