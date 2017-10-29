<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $identifier Name or identifier of role
     *
     * @return self
     */
    public function setRole(?string $identifier);

    /**
     * Get role
     *
     * If no "role" value has been set, this method will
     * set and return a default "role" value,
     * if any such value is available
     *
     * @see getDefaultRole()
     *
     * @return string|null role or null if no role has been set
     */
    public function getRole() : ?string ;

    /**
     * Check if "role" has been set
     *
     * @return bool True if "role" has been set, false if not
     */
    public function hasRole() : bool;

    /**
     * Get a default "role" value, if any is available
     *
     * @return string|null Default "role" value or null if no default value is available
     */
    public function getDefaultRole() : ?string;
}