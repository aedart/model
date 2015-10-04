<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Updated At (date) Aware</h1>
 *
 * Components implementing this interface are aware of a "updated at" string date
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface UpdatedAtAware {

    /**
     * Set the given updated at
     *
     * @param string $date Date of when this component, entity or resource was updated
     *
     * @return void
     */
    public function setUpdatedAt($date);

    /**
     * Get the given updated at
     *
     * If no updated at has been set, this method will
     * set and return a default updated at, if any such
     * value is available
     *
     * @see getDefaultUpdatedAt()
     *
     * @return string|null updated at or null if none updated at has been set
     */
    public function getUpdatedAt();

    /**
     * Get a default updated at value, if any is available
     *
     * @return string|null A default updated at value or Null if no default value is available
     */
    public function getDefaultUpdatedAt();

    /**
     * Check if updated at has been set
     *
     * @return bool True if updated at has been set, false if not
     */
    public function hasUpdatedAt();

    /**
     * Check if a default updated at is available or not
     *
     * @return bool True of a default updated at is available, false if not
     */
    public function hasDefaultUpdatedAt();
}