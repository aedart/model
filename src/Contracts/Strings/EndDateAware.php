<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>End Date Aware</h1>
 *
 * Components implementing this interface are aware of string end date,
 * for some kind of an event
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface EndDateAware {

    /**
     * Set the given end date
     *
     * @param string $date End Date for some kind of an event
     *
     * @return void
     */
    public function setEndDate($date);

    /**
     * Get the given end date
     *
     * If no end date has been set, this method will
     * set and return a default end date, if any such
     * value is available
     *
     * @see getDefaultEndDate()
     *
     * @return string|null end date or null if none end date has been set
     */
    public function getEndDate();

    /**
     * Get a default end date value, if any is available
     *
     * @return string|null A default end date value or Null if no default value is available
     */
    public function getDefaultEndDate();

    /**
     * Check if end date has been set
     *
     * @return bool True if end date has been set, false if not
     */
    public function hasEndDate();

    /**
     * Check if a default end date is available or not
     *
     * @return bool True of a default end date is available, false if not
     */
    public function hasDefaultEndDate();
}