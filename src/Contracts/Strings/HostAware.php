<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Host Aware</h1>
 *
 * Component is aware of a string "host" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface HostAware
{
    /**
     * Set host
     *
     * @param string|null $identifier Identifier of a host
     *
     * @return self
     */
    public function setHost(?string $identifier);

    /**
     * Get host
     *
     * If no "host" value has been set, this method will
     * set and return a default "host" value,
     * if any such value is available
     *
     * @see getDefaultHost()
     *
     * @return string|null host or null if no host has been set
     */
    public function getHost() : ?string ;

    /**
     * Check if "host" has been set
     *
     * @return bool True if "host" has been set, false if not
     */
    public function hasHost() : bool;

    /**
     * Get a default "host" value, if any is available
     *
     * @return string|null Default "host" value or null if no default value is available
     */
    public function getDefaultHost() : ?string;
}