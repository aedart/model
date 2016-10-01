<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Email Aware</h1>
 *
 * Component is aware of a string "email" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface EmailAware
{
    /**
     * Set email
     *
     * @param string $email Email
     *
     * @return void
     */
    public function setEmail($email);

    /**
     * Get email
     *
     * If no "email" value has been set, this method will
     * set and return a default "email" value,
     * if any such value is available
     *
     * @see getDefaultEmail()
     *
     * @return string|null "email" value or null if no "email" value has been set
     */
    public function getEmail();

    /**
     * Get a default "email" value, if any is available
     *
     * @return string|null A default "email" value or null if no default value is available
     */
    public function getDefaultEmail();

    /**
     * Check if "email" has been set
     *
     * @return bool True if "email" value has been set, false if not
     */
    public function hasEmail();

    /**
     * Check if a default "email" is available or not
     *
     * @return bool True of a default "email" value is available, false if not
     */
    public function hasDefaultEmail();
}