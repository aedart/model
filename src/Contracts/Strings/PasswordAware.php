<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $password Password
     *
     * @return void
     */
    public function setPassword($password);

    /**
     * Get password
     *
     * If no "password" value has been set, this method will
     * set and return a default "password" value,
     * if any such value is available
     *
     * @see getDefaultPassword()
     *
     * @return string|null "password" value or null if no "password" value has been set
     */
    public function getPassword();

    /**
     * Get a default "password" value, if any is available
     *
     * @return string|null A default "password" value or null if no default value is available
     */
    public function getDefaultPassword();

    /**
     * Check if "password" has been set
     *
     * @return bool True if "password" value has been set, false if not
     */
    public function hasPassword();

    /**
     * Check if a default "password" is available or not
     *
     * @return bool True of a default "password" value is available, false if not
     */
    public function hasDefaultPassword();
}