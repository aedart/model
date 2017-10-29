<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Group Aware</h1>
 *
 * Component is aware of a string "group" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface GroupAware
{
    /**
     * Set group
     *
     * @param string|null $identity Group identifier
     *
     * @return self
     */
    public function setGroup(?string $identity);

    /**
     * Get group
     *
     * If no "group" value has been set, this method will
     * set and return a default "group" value,
     * if any such value is available
     *
     * @see getDefaultGroup()
     *
     * @return string|null group or null if no group has been set
     */
    public function getGroup() : ?string ;

    /**
     * Check if "group" has been set
     *
     * @return bool True if "group" has been set, false if not
     */
    public function hasGroup() : bool;

    /**
     * Get a default "group" value, if any is available
     *
     * @return string|null Default "group" value or null if no default value is available
     */
    public function getDefaultGroup() : ?string;
}