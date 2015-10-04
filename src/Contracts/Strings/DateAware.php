<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Date Aware</h1>
 *
 * Components implementing this interface are aware of string date
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface DateAware {

    /**
     * Set the given date
     *
     * @param string $date Date
     *
     * @return void
     */
    public function setDate($date);

    /**
     * Get the given date
     *
     * If no date has been set, this method will
     * set and return a default date, if any such
     * value is available
     *
     * @see getDefaultDate()
     *
     * @return string|null date or null if none date has been set
     */
    public function getDate();

    /**
     * Get a default date value, if any is available
     *
     * @return string|null A default date value or Null if no default value is available
     */
    public function getDefaultDate();

    /**
     * Check if date has been set
     *
     * @return bool True if date has been set, false if not
     */
    public function hasDate();

    /**
     * Check if a default date is available or not
     *
     * @return bool True of a default date is available, false if not
     */
    public function hasDefaultDate();
}