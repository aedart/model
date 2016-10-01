<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Gender Aware</h1>
 *
 * Component is aware of a string "gender" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface GenderAware
{
    /**
     * Set gender
     *
     * @param string $identity Gender (sex) identity of a person, animal or something
     *
     * @return void
     */
    public function setGender($identity);

    /**
     * Get gender
     *
     * If no "gender" value has been set, this method will
     * set and return a default "gender" value,
     * if any such value is available
     *
     * @see getDefaultGender()
     *
     * @return string|null "gender" value or null if no "gender" value has been set
     */
    public function getGender();

    /**
     * Get a default "gender" value, if any is available
     *
     * @return string|null A default "gender" value or null if no default value is available
     */
    public function getDefaultGender();

    /**
     * Check if "gender" has been set
     *
     * @return bool True if "gender" value has been set, false if not
     */
    public function hasGender();

    /**
     * Check if a default "gender" is available or not
     *
     * @return bool True of a default "gender" value is available, false if not
     */
    public function hasDefaultGender();
}