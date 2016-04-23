<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Type Aware</h1>
 *
 * Components are aware of and able to obtain some kind
 * of a type.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface TypeAware
{
    /**
     * Set the given type
     *
     * @param string $type The type of something
     *
     * @return void
     */
    public function setType($type);

    /**
     * Get the given type
     *
     * If no type has been set, this method will
     * set and return a default type, if any such
     * value is available
     *
     * @see getDefaultType()
     *
     * @return string|null type or null if none type has been set
     */
    public function getType();

    /**
     * Get a default type value, if any is available
     *
     * @return string|null A default type value or Null if no default value is available
     */
    public function getDefaultType();

    /**
     * Check if type has been set
     *
     * @return bool True if type has been set, false if not
     */
    public function hasType();

    /**
     * Check if a default type is available or not
     *
     * @return bool True of a default type is available, false if not
     */
    public function hasDefaultType();
}