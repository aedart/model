<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Ip V6 Aware</h1>
 *
 * Component is aware of a string "ip v6" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface IpV6Aware
{
    /**
     * Set ip v6
     *
     * @param string|null $address IPv6 address
     *
     * @return self
     */
    public function setIpV6(?string $address);

    /**
     * Get ip v6
     *
     * If no "ip v6" value has been set, this method will
     * set and return a default "ip v6" value,
     * if any such value is available
     *
     * @see getDefaultIpV6()
     *
     * @return string|null ip v6 or null if no ip v6 has been set
     */
    public function getIpV6() : ?string ;

    /**
     * Check if "ip v6" has been set
     *
     * @return bool True if "ip v6" has been set, false if not
     */
    public function hasIpV6() : bool;

    /**
     * Get a default "ip v6" value, if any is available
     *
     * @return string|null Default "ip v6" value or null if no default value is available
     */
    public function getDefaultIpV6() : ?string;
}