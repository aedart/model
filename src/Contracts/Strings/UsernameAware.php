<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $identifier Identifier to be used as username
     *
     * @return self
     */
    public function setUsername(?string $identifier);

    /**
     * Get username
     *
     * If no "username" value has been set, this method will
     * set and return a default "username" value,
     * if any such value is available
     *
     * @see getDefaultUsername()
     *
     * @return string|null username or null if no username has been set
     */
    public function getUsername() : ?string ;

    /**
     * Check if "username" has been set
     *
     * @return bool True if "username" has been set, false if not
     */
    public function hasUsername() : bool;

    /**
     * Get a default "username" value, if any is available
     *
     * @return string|null Default "username" value or null if no default value is available
     */
    public function getDefaultUsername() : ?string;
}