<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Birthdate Aware</h1>
 *
 * Component is aware of a string "birthdate" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface BirthdateAware
{
    /**
     * Set birthdate
     *
     * @param string $date Date of birth
     *
     * @return void
     */
    public function setBirthdate($date);

    /**
     * Get birthdate
     *
     * If no "birthdate" value has been set, this method will
     * set and return a default "birthdate" value,
     * if any such value is available
     *
     * @see getDefaultBirthdate()
     *
     * @return string|null "birthdate" value or null if no "birthdate" value has been set
     */
    public function getBirthdate();

    /**
     * Get a default "birthdate" value, if any is available
     *
     * @return string|null A default "birthdate" value or null if no default value is available
     */
    public function getDefaultBirthdate();

    /**
     * Check if "birthdate" has been set
     *
     * @return bool True if "birthdate" value has been set, false if not
     */
    public function hasBirthdate();

    /**
     * Check if a default "birthdate" is available or not
     *
     * @return bool True of a default "birthdate" value is available, false if not
     */
    public function hasDefaultBirthdate();
}