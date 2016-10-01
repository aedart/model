<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Middle Name Aware</h1>
 *
 * Component is aware of a string "middle name" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface MiddleNameAware
{
    /**
     * Set middle name
     *
     * @param string $name Middle Name or names of a person
     *
     * @return void
     */
    public function setMiddleName($name);

    /**
     * Get middle name
     *
     * If no "middle name" value has been set, this method will
     * set and return a default "middle name" value,
     * if any such value is available
     *
     * @see getDefaultMiddleName()
     *
     * @return string|null "middle name" value or null if no "middle name" value has been set
     */
    public function getMiddleName();

    /**
     * Get a default "middle name" value, if any is available
     *
     * @return string|null A default "middle name" value or null if no default value is available
     */
    public function getDefaultMiddleName();

    /**
     * Check if "middle name" has been set
     *
     * @return bool True if "middle name" value has been set, false if not
     */
    public function hasMiddleName();

    /**
     * Check if a default "middle name" is available or not
     *
     * @return bool True of a default "middle name" value is available, false if not
     */
    public function hasDefaultMiddleName();
}