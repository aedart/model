<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Status Aware</h1>
 *
 * Component is aware of a string "status" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface StatusAware
{
    /**
     * Set status
     *
     * @param string|null $status Situation of progress, classification, or civil status
     *
     * @return self
     */
    public function setStatus(?string $status);

    /**
     * Get status
     *
     * If no "status" value has been set, this method will
     * set and return a default "status" value,
     * if any such value is available
     *
     * @see getDefaultStatus()
     *
     * @return string|null status or null if no status has been set
     */
    public function getStatus() : ?string ;

    /**
     * Check if "status" has been set
     *
     * @return bool True if "status" has been set, false if not
     */
    public function hasStatus() : bool;

    /**
     * Get a default "status" value, if any is available
     *
     * @return string|null Default "status" value or null if no default value is available
     */
    public function getDefaultStatus() : ?string;
}