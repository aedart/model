<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Group Aware</h1>
 *
 * Component is aware of a int "group" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface GroupAware
{
    /**
     * Set group
     *
     * @param int|null $identity Group identifier
     *
     * @return self
     */
    public function setGroup(?int $identity);

    /**
     * Get group
     *
     * If no "group" value has been set, this method will
     * set and return a default "group" value,
     * if any such value is available
     *
     * @see getDefaultGroup()
     *
     * @return int|null group or null if no group has been set
     */
    public function getGroup() : ?int ;

    /**
     * Check if "group" has been set
     *
     * @return bool True if "group" has been set, false if not
     */
    public function hasGroup() : bool;

    /**
     * Get a default "group" value, if any is available
     *
     * @return int|null Default "group" value or null if no default value is available
     */
    public function getDefaultGroup() : ?int;
}