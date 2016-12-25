<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Created At Aware</h1>
 *
 * Component is aware of a int "created at" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface CreatedAtAware
{
    /**
     * Set created at
     *
     * @param int $date Date (UNIX timestamp) of when this component, entity or resource was created
     *
     * @return void
     */
    public function setCreatedAt($date);

    /**
     * Get created at
     *
     * If no "created at" value has been set, this method will
     * set and return a default "created at" value,
     * if any such value is available
     *
     * @see getDefaultCreatedAt()
     *
     * @return int|null "created at" value or null if no "created at" value has been set
     */
    public function getCreatedAt();

    /**
     * Get a default "created at" value, if any is available
     *
     * @return int|null A default "created at" value or null if no default value is available
     */
    public function getDefaultCreatedAt();

    /**
     * Check if "created at" has been set
     *
     * @return bool True if "created at" value has been set, false if not
     */
    public function hasCreatedAt();

    /**
     * Check if a default "created at" is available or not
     *
     * @return bool True of a default "created at" value is available, false if not
     */
    public function hasDefaultCreatedAt();
}