<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Name Aware</h1>
 *
 * Component is aware of a string "name" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface NameAware
{
    /**
     * Set name
     *
     * @param string $name Name
     *
     * @return void
     */
    public function setName($name);

    /**
     * Get name
     *
     * If no "name" value has been set, this method will
     * set and return a default "name" value,
     * if any such value is available
     *
     * @see getDefaultName()
     *
     * @return string|null "name" value or null if no "name" value has been set
     */
    public function getName();

    /**
     * Get a default "name" value, if any is available
     *
     * @return string|null A default "name" value or null if no default value is available
     */
    public function getDefaultName();

    /**
     * Check if "name" has been set
     *
     * @return bool True if "name" value has been set, false if not
     */
    public function hasName();

    /**
     * Check if a default "name" is available or not
     *
     * @return bool True of a default "name" value is available, false if not
     */
    public function hasDefaultName();
}