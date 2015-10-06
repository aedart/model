<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>username Aware</h1>
 *
 * Components implementing this interface are aware of a user's username,
 * which can be used to identify him or her.
 *
 * @see https://en.wikipedia.org/wiki/User_%28computing%29
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface UsernameAware {

    /**
     * Set the given username
     *
     * @param string $identifier Username
     *
     * @return void
     */
    public function setUsername($identifier);

    /**
     * Get the given username
     *
     * If no username has been set, this method will
     * set and return a default username, if any such
     * value is available
     *
     * @see getDefaultUsername()
     *
     * @return string|null username or null if none username has been set
     */
    public function getUsername();

    /**
     * Get a default username value, if any is available
     *
     * @return string|null A default username value or Null if no default value is available
     */
    public function getDefaultUsername();

    /**
     * Check if username has been set
     *
     * @return bool True if username has been set, false if not
     */
    public function hasUsername();

    /**
     * Check if a default username is available or not
     *
     * @return bool True of a default username is available, false if not
     */
    public function hasDefaultUsername();
}