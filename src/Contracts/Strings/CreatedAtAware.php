<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Created At (date) Aware</h1>
 *
 * Components implementing this interface are aware of a "created at" string date
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface CreatedAtAware {

    /**
     * Set the given created at
     *
     * @param string $date Date of when this component, entity or resource was created
     *
     * @return void
     */
    public function setCreatedAt($date);

    /**
     * Get the given created at
     *
     * If no created at has been set, this method will
     * set and return a default created at, if any such
     * value is available
     *
     * @see getDefaultCreatedAt()
     *
     * @return string|null created at or null if none created at has been set
     */
    public function getCreatedAt();

    /**
     * Get a default created at value, if any is available
     *
     * @return string|null A default created at value or Null if no default value is available
     */
    public function getDefaultCreatedAt();

    /**
     * Check if created at has been set
     *
     * @return bool True if created at has been set, false if not
     */
    public function hasCreatedAt();

    /**
     * Check if a default created at is available or not
     *
     * @return bool True of a default created at is available, false if not
     */
    public function hasDefaultCreatedAt();
}