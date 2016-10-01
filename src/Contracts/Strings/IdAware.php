<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Id Aware</h1>
 *
 * Component is aware of a string "id" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface IdAware
{
    /**
     * Set id
     *
     * @param string $identifier Unique identifier
     *
     * @return void
     */
    public function setId($identifier);

    /**
     * Get id
     *
     * If no "id" value has been set, this method will
     * set and return a default "id" value,
     * if any such value is available
     *
     * @see getDefaultId()
     *
     * @return string|null "id" value or null if no "id" value has been set
     */
    public function getId();

    /**
     * Get a default "id" value, if any is available
     *
     * @return string|null A default "id" value or null if no default value is available
     */
    public function getDefaultId();

    /**
     * Check if "id" has been set
     *
     * @return bool True if "id" value has been set, false if not
     */
    public function hasId();

    /**
     * Check if a default "id" is available or not
     *
     * @return bool True of a default "id" value is available, false if not
     */
    public function hasDefaultId();
}