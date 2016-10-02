<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Profile Aware</h1>
 *
 * Component is aware of a string "profile" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ProfileAware
{
    /**
     * Set profile
     *
     * @param string $value The profile or someone or something
     *
     * @return void
     */
    public function setProfile($value);

    /**
     * Get profile
     *
     * If no "profile" value has been set, this method will
     * set and return a default "profile" value,
     * if any such value is available
     *
     * @see getDefaultProfile()
     *
     * @return string|null "profile" value or null if no "profile" value has been set
     */
    public function getProfile();

    /**
     * Get a default "profile" value, if any is available
     *
     * @return string|null A default "profile" value or null if no default value is available
     */
    public function getDefaultProfile();

    /**
     * Check if "profile" has been set
     *
     * @return bool True if "profile" value has been set, false if not
     */
    public function hasProfile();

    /**
     * Check if a default "profile" is available or not
     *
     * @return bool True of a default "profile" value is available, false if not
     */
    public function hasDefaultProfile();
}