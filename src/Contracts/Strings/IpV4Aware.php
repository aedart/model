<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Ip V4 Aware</h1>
 *
 * Component is aware of a string "ip v4" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface IpV4Aware
{
    /**
     * Set ip v4
     *
     * @param string|null $address IPv4 address
     *
     * @return self
     */
    public function setIpV4(?string $address);

    /**
     * Get ip v4
     *
     * If no "ip v4" value has been set, this method will
     * set and return a default "ip v4" value,
     * if any such value is available
     *
     * @see getDefaultIpV4()
     *
     * @return string|null ip v4 or null if no ip v4 has been set
     */
    public function getIpV4() : ?string ;

    /**
     * Check if "ip v4" has been set
     *
     * @return bool True if "ip v4" has been set, false if not
     */
    public function hasIpV4() : bool;

    /**
     * Get a default "ip v4" value, if any is available
     *
     * @return string|null Default "ip v4" value or null if no default value is available
     */
    public function getDefaultIpV4() : ?string;
}