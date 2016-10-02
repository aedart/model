<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Role Aware</h1>
 *
 * Component is aware of a string "role" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface RoleAware
{
    /**
     * Set role
     *
     * @param string $name Name of a role or the role that someone or something has
     *
     * @return void
     */
    public function setRole($name);

    /**
     * Get role
     *
     * If no "role" value has been set, this method will
     * set and return a default "role" value,
     * if any such value is available
     *
     * @see getDefaultRole()
     *
     * @return string|null "role" value or null if no "role" value has been set
     */
    public function getRole();

    /**
     * Get a default "role" value, if any is available
     *
     * @return string|null A default "role" value or null if no default value is available
     */
    public function getDefaultRole();

    /**
     * Check if "role" has been set
     *
     * @return bool True if "role" value has been set, false if not
     */
    public function hasRole();

    /**
     * Check if a default "role" is available or not
     *
     * @return bool True of a default "role" value is available, false if not
     */
    public function hasDefaultRole();
}