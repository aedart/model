<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>First Name Aware</h1>
 *
 * Component is aware of a string "first name" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface FirstNameAware
{
    /**
     * Set first name
     *
     * @param string|null $name First name (given name) or forename of a person
     *
     * @return self
     */
    public function setFirstName(?string $name);

    /**
     * Get first name
     *
     * If no "first name" value has been set, this method will
     * set and return a default "first name" value,
     * if any such value is available
     *
     * @see getDefaultFirstName()
     *
     * @return string|null first name or null if no first name has been set
     */
    public function getFirstName() : ?string ;

    /**
     * Check if "first name" has been set
     *
     * @return bool True if "first name" has been set, false if not
     */
    public function hasFirstName() : bool;

    /**
     * Get a default "first name" value, if any is available
     *
     * @return string|null Default "first name" value or null if no default value is available
     */
    public function getDefaultFirstName() : ?string;
}