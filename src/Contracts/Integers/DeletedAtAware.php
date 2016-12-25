<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Deleted At Aware</h1>
 *
 * Component is aware of a int "deleted at" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface DeletedAtAware
{
    /**
     * Set deleted at
     *
     * @param int $date Date (UNIX timestamp) of when this component, entity or resource was deleted
     *
     * @return void
     */
    public function setDeletedAt($date);

    /**
     * Get deleted at
     *
     * If no "deleted at" value has been set, this method will
     * set and return a default "deleted at" value,
     * if any such value is available
     *
     * @see getDefaultDeletedAt()
     *
     * @return int|null "deleted at" value or null if no "deleted at" value has been set
     */
    public function getDeletedAt();

    /**
     * Get a default "deleted at" value, if any is available
     *
     * @return int|null A default "deleted at" value or null if no default value is available
     */
    public function getDefaultDeletedAt();

    /**
     * Check if "deleted at" has been set
     *
     * @return bool True if "deleted at" value has been set, false if not
     */
    public function hasDeletedAt();

    /**
     * Check if a default "deleted at" is available or not
     *
     * @return bool True of a default "deleted at" value is available, false if not
     */
    public function hasDefaultDeletedAt();
}