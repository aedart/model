<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Type Aware</h1>
 *
 * Component is aware of a string "type" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface TypeAware
{
    /**
     * Set type
     *
     * @param string $type Type of something
     *
     * @return void
     */
    public function setType($type);

    /**
     * Get type
     *
     * If no "type" value has been set, this method will
     * set and return a default "type" value,
     * if any such value is available
     *
     * @see getDefaultType()
     *
     * @return string|null "type" value or null if no "type" value has been set
     */
    public function getType();

    /**
     * Get a default "type" value, if any is available
     *
     * @return string|null A default "type" value or null if no default value is available
     */
    public function getDefaultType();

    /**
     * Check if "type" has been set
     *
     * @return bool True if "type" value has been set, false if not
     */
    public function hasType();

    /**
     * Check if a default "type" is available or not
     *
     * @return bool True of a default "type" value is available, false if not
     */
    public function hasDefaultType();
}