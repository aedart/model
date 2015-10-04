<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Deleted At (date) Aware</h1>
 *
 * Components implementing this interface are aware of a "deleted at" string date
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface DeletedAtAware {

    /**
     * Set the given deleted at
     *
     * @param string $date Date of when this component, entity or resource was deleted
     *
     * @return void
     */
    public function setDeletedAt($date);

    /**
     * Get the given deleted at
     *
     * If no deleted at has been set, this method will
     * set and return a default deleted at, if any such
     * value is available
     *
     * @see getDefaultDeletedAt()
     *
     * @return string|null deleted at or null if none deleted at has been set
     */
    public function getDeletedAt();

    /**
     * Get a default deleted at value, if any is available
     *
     * @return string|null A default deleted at value or Null if no default value is available
     */
    public function getDefaultDeletedAt();

    /**
     * Check if deleted at has been set
     *
     * @return bool True if deleted at has been set, false if not
     */
    public function hasDeletedAt();

    /**
     * Check if a default deleted at is available or not
     *
     * @return bool True of a default deleted at is available, false if not
     */
    public function hasDefaultDeletedAt();
}