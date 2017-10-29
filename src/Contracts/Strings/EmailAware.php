<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $email Email
     *
     * @return self
     */
    public function setEmail(?string $email);

    /**
     * Get email
     *
     * If no "email" value has been set, this method will
     * set and return a default "email" value,
     * if any such value is available
     *
     * @see getDefaultEmail()
     *
     * @return string|null email or null if no email has been set
     */
    public function getEmail() : ?string ;

    /**
     * Check if "email" has been set
     *
     * @return bool True if "email" has been set, false if not
     */
    public function hasEmail() : bool;

    /**
     * Get a default "email" value, if any is available
     *
     * @return string|null Default "email" value or null if no default value is available
     */
    public function getDefaultEmail() : ?string;
}