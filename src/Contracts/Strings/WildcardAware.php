<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Wildcard Aware</h1>
 *
 * Component is aware of a string "wildcard" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface WildcardAware
{
    /**
     * Set wildcard
     *
     * @param string|null $identifier Wildcard identifier
     *
     * @return self
     */
    public function setWildcard(?string $identifier);

    /**
     * Get wildcard
     *
     * If no "wildcard" value has been set, this method will
     * set and return a default "wildcard" value,
     * if any such value is available
     *
     * @see getDefaultWildcard()
     *
     * @return string|null wildcard or null if no wildcard has been set
     */
    public function getWildcard() : ?string ;

    /**
     * Check if "wildcard" has been set
     *
     * @return bool True if "wildcard" has been set, false if not
     */
    public function hasWildcard() : bool;

    /**
     * Get a default "wildcard" value, if any is available
     *
     * @return string|null Default "wildcard" value or null if no default value is available
     */
    public function getDefaultWildcard() : ?string;
}