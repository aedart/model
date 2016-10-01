<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Updated At Aware</h1>
 *
 * Component is aware of a string "updated at" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface UpdatedAtAware
{
    /**
     * Set updated at
     *
     * @param string $date Date of when this component, entity or resource was updated
     *
     * @return void
     */
    public function setUpdatedAt($date);

    /**
     * Get updated at
     *
     * If no "updated at" value has been set, this method will
     * set and return a default "updated at" value,
     * if any such value is available
     *
     * @see getDefaultUpdatedAt()
     *
     * @return string|null "updated at" value or null if no "updated at" value has been set
     */
    public function getUpdatedAt();

    /**
     * Get a default "updated at" value, if any is available
     *
     * @return string|null A default "updated at" value or null if no default value is available
     */
    public function getDefaultUpdatedAt();

    /**
     * Check if "updated at" has been set
     *
     * @return bool True if "updated at" value has been set, false if not
     */
    public function hasUpdatedAt();

    /**
     * Check if a default "updated at" is available or not
     *
     * @return bool True of a default "updated at" value is available, false if not
     */
    public function hasDefaultUpdatedAt();
}