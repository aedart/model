<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $name First name (given name) or forename of a person
     *
     * @return void
     */
    public function setFirstName($name);

    /**
     * Get first name
     *
     * If no "first name" value has been set, this method will
     * set and return a default "first name" value,
     * if any such value is available
     *
     * @see getDefaultFirstName()
     *
     * @return string|null "first name" value or null if no "first name" value has been set
     */
    public function getFirstName();

    /**
     * Get a default "first name" value, if any is available
     *
     * @return string|null A default "first name" value or null if no default value is available
     */
    public function getDefaultFirstName();

    /**
     * Check if "first name" has been set
     *
     * @return bool True if "first name" value has been set, false if not
     */
    public function hasFirstName();

    /**
     * Check if a default "first name" is available or not
     *
     * @return bool True of a default "first name" value is available, false if not
     */
    public function hasDefaultFirstName();
}