<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Username Aware</h1>
 *
 * Component is aware of a string "username" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface UsernameAware
{
    /**
     * Set username
     *
     * @param string $identifier Identifier to be used as a username
     *
     * @return void
     */
    public function setUsername($identifier);

    /**
     * Get username
     *
     * If no "username" value has been set, this method will
     * set and return a default "username" value,
     * if any such value is available
     *
     * @see getDefaultUsername()
     *
     * @return string|null "username" value or null if no "username" value has been set
     */
    public function getUsername();

    /**
     * Get a default "username" value, if any is available
     *
     * @return string|null A default "username" value or null if no default value is available
     */
    public function getDefaultUsername();

    /**
     * Check if "username" has been set
     *
     * @return bool True if "username" value has been set, false if not
     */
    public function hasUsername();

    /**
     * Check if a default "username" is available or not
     *
     * @return bool True of a default "username" value is available, false if not
     */
    public function hasDefaultUsername();
}