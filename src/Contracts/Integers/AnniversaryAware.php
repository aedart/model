<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Anniversary Aware</h1>
 *
 * Component is aware of a int "anniversary" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface AnniversaryAware
{
    /**
     * Set anniversary
     *
     * @param int $date Date of anniversary - UNIX timestamp
     *
     * @return void
     */
    public function setAnniversary($date);

    /**
     * Get anniversary
     *
     * If no "anniversary" value has been set, this method will
     * set and return a default "anniversary" value,
     * if any such value is available
     *
     * @see getDefaultAnniversary()
     *
     * @return int|null "anniversary" value or null if no "anniversary" value has been set
     */
    public function getAnniversary();

    /**
     * Get a default "anniversary" value, if any is available
     *
     * @return int|null A default "anniversary" value or null if no default value is available
     */
    public function getDefaultAnniversary();

    /**
     * Check if "anniversary" has been set
     *
     * @return bool True if "anniversary" value has been set, false if not
     */
    public function hasAnniversary();

    /**
     * Check if a default "anniversary" is available or not
     *
     * @return bool True of a default "anniversary" value is available, false if not
     */
    public function hasDefaultAnniversary();
}