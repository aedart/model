<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Name Aware</h1>
 *
 * Components implementing this interface are aware of a name
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface NameAware {

    /**
     * Set the given name
     *
     * @param string $name Name
     *
     * @return void
     */
    public function setName($name);

    /**
     * Get the given name
     *
     * If no name has been set, this method will
     * set and return a default name, if any such
     * value is available
     *
     * @see getDefaultName()
     *
     * @return string|null name or null if none name has been set
     */
    public function getName();

    /**
     * Get a default name value, if any is available
     *
     * @return string|null A default name value or Null if no default value is available
     */
    public function getDefaultName();

    /**
     * Check if name has been set
     *
     * @return bool True if name has been set, false if not
     */
    public function hasName();

    /**
     * Check if a default name is available or not
     *
     * @return bool True of a default name is available, false if not
     */
    public function hasDefaultName();
}