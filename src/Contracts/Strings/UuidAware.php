<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Uuid Aware</h1>
 *
 * Component is aware of a string "uuid" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface UuidAware
{
    /**
     * Set uuid
     *
     * @param string $identifier Universally Unique Identifier (UUID)
     *
     * @return void
     */
    public function setUuid($identifier);

    /**
     * Get uuid
     *
     * If no "uuid" value has been set, this method will
     * set and return a default "uuid" value,
     * if any such value is available
     *
     * @see getDefaultUuid()
     *
     * @return string|null "uuid" value or null if no "uuid" value has been set
     */
    public function getUuid();

    /**
     * Get a default "uuid" value, if any is available
     *
     * @return string|null A default "uuid" value or null if no default value is available
     */
    public function getDefaultUuid();

    /**
     * Check if "uuid" has been set
     *
     * @return bool True if "uuid" value has been set, false if not
     */
    public function hasUuid();

    /**
     * Check if a default "uuid" is available or not
     *
     * @return bool True of a default "uuid" value is available, false if not
     */
    public function hasDefaultUuid();
}