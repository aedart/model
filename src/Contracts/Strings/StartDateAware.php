<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Start Date Aware</h1>
 *
 * Components implementing this interface are aware of string start date,
 * for some kind of an event
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface StartDateAware {

    /**
     * Set the given start date
     *
     * @param string $date Start Date of some kind of an event
     *
     * @return void
     */
    public function setStartDate($date);

    /**
     * Get the given start date
     *
     * If no start date has been set, this method will
     * set and return a default start date, if any such
     * value is available
     *
     * @see getDefaultStartDate()
     *
     * @return string|null start date or null if none start date has been set
     */
    public function getStartDate();

    /**
     * Get a default start date value, if any is available
     *
     * @return string|null A default start date value or Null if no default value is available
     */
    public function getDefaultStartDate();

    /**
     * Check if start date has been set
     *
     * @return bool True if start date has been set, false if not
     */
    public function hasStartDate();

    /**
     * Check if a default start date is available or not
     *
     * @return bool True of a default start date is available, false if not
     */
    public function hasDefaultStartDate();
}