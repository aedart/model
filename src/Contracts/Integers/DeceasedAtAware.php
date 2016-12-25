<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Deceased At Aware</h1>
 *
 * Component is aware of a int "deceased at" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface DeceasedAtAware
{
    /**
     * Set deceased at
     *
     * @param int $date Date (UNIX timestamp) of when a person, animal of something has died
     *
     * @return void
     */
    public function setDeceasedAt($date);

    /**
     * Get deceased at
     *
     * If no "deceased at" value has been set, this method will
     * set and return a default "deceased at" value,
     * if any such value is available
     *
     * @see getDefaultDeceasedAt()
     *
     * @return int|null "deceased at" value or null if no "deceased at" value has been set
     */
    public function getDeceasedAt();

    /**
     * Get a default "deceased at" value, if any is available
     *
     * @return int|null A default "deceased at" value or null if no default value is available
     */
    public function getDefaultDeceasedAt();

    /**
     * Check if "deceased at" has been set
     *
     * @return bool True if "deceased at" value has been set, false if not
     */
    public function hasDeceasedAt();

    /**
     * Check if a default "deceased at" is available or not
     *
     * @return bool True of a default "deceased at" value is available, false if not
     */
    public function hasDefaultDeceasedAt();
}