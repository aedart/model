<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Status Aware</h1>
 *
 * Component is aware of a int "status" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface StatusAware
{
    /**
     * Set status
     *
     * @param int|null $status Situation of progress, classification, or civil status
     *
     * @return self
     */
    public function setStatus(?int $status);

    /**
     * Get status
     *
     * If no "status" value has been set, this method will
     * set and return a default "status" value,
     * if any such value is available
     *
     * @see getDefaultStatus()
     *
     * @return int|null status or null if no status has been set
     */
    public function getStatus() : ?int ;

    /**
     * Check if "status" has been set
     *
     * @return bool True if "status" has been set, false if not
     */
    public function hasStatus() : bool;

    /**
     * Get a default "status" value, if any is available
     *
     * @return int|null Default "status" value or null if no default value is available
     */
    public function getDefaultStatus() : ?int;
}