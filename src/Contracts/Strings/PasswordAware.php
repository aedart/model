<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Password Aware</h1>
 *
 * Component is aware of a string "password" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface PasswordAware
{
    /**
     * Set password
     *
     * @param string|null $password Password
     *
     * @return self
     */
    public function setPassword(?string $password);

    /**
     * Get password
     *
     * If no "password" value has been set, this method will
     * set and return a default "password" value,
     * if any such value is available
     *
     * @see getDefaultPassword()
     *
     * @return string|null password or null if no password has been set
     */
    public function getPassword() : ?string ;

    /**
     * Check if "password" has been set
     *
     * @return bool True if "password" has been set, false if not
     */
    public function hasPassword() : bool;

    /**
     * Get a default "password" value, if any is available
     *
     * @return string|null Default "password" value or null if no default value is available
     */
    public function getDefaultPassword() : ?string;
}