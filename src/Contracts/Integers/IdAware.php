<?php namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Id Aware</h1>
 *
 * Components implementing this interface are aware of unique identifier
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
interface IdAware {

    /**
     * Set the given id
     *
     * @param int $identifier Unique identifier
     *
     * @return void
     */
    public function setId($identifier);

    /**
     * Get the given id
     *
     * If no id has been set, this method will
     * set and return a default id, if any such
     * value is available
     *
     * @see getDefaultId()
     *
     * @return int|null id or null if none id has been set
     */
    public function getId();

    /**
     * Get a default id value, if any is available
     *
     * @return int|null A default id value or Null if no default value is available
     */
    public function getDefaultId();

    /**
     * Check if id has been set
     *
     * @return bool True if id has been set, false if not
     */
    public function hasId();

    /**
     * Check if a default id is available or not
     *
     * @return bool True of a default id is available, false if not
     */
    public function hasDefaultId();
}