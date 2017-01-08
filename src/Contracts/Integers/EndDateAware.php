<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>End Date Aware</h1>
 *
 * Component is aware of a int "end date" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface EndDateAware
{
    /**
     * Set end date
     *
     * @param int $date Date (UNIX timestamp) for when some kind of event ends
     *
     * @return void
     */
    public function setEndDate($date);

    /**
     * Get end date
     *
     * If no "end date" value has been set, this method will
     * set and return a default "end date" value,
     * if any such value is available
     *
     * @see getDefaultEndDate()
     *
     * @return int|null "end date" value or null if no "end date" value has been set
     */
    public function getEndDate();

    /**
     * Get a default "end date" value, if any is available
     *
     * @return int|null A default "end date" value or null if no default value is available
     */
    public function getDefaultEndDate();

    /**
     * Check if "end date" has been set
     *
     * @return bool True if "end date" value has been set, false if not
     */
    public function hasEndDate();

    /**
     * Check if a default "end date" is available or not
     *
     * @return bool True of a default "end date" value is available, false if not
     */
    public function hasDefaultEndDate();
}