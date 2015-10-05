<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Email Aware</h1>
 *
 * Components implementing this interface are aware of an email
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface EmailAware {

    /**
     * Set the given email
     *
     * @param string $email Email
     *
     * @return void
     */
    public function setEmail($email);

    /**
     * Get the given email
     *
     * If no email has been set, this method will
     * set and return a default email, if any such
     * value is available
     *
     * @see getDefaultEmail()
     *
     * @return string|null email or null if none email has been set
     */
    public function getEmail();

    /**
     * Get a default email value, if any is available
     *
     * @return string|null A default email value or Null if no default value is available
     */
    public function getDefaultEmail();

    /**
     * Check if email has been set
     *
     * @return bool True if email has been set, false if not
     */
    public function hasEmail();

    /**
     * Check if a default email is available or not
     *
     * @return bool True of a default email is available, false if not
     */
    public function hasDefaultEmail();
}