<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Ip Aware</h1>
 *
 * Component is aware of a string "ip" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface IpAware
{
    /**
     * Set ip
     *
     * @param string|null $address IP address
     *
     * @return self
     */
    public function setIp(?string $address);

    /**
     * Get ip
     *
     * If no "ip" value has been set, this method will
     * set and return a default "ip" value,
     * if any such value is available
     *
     * @see getDefaultIp()
     *
     * @return string|null ip or null if no ip has been set
     */
    public function getIp() : ?string ;

    /**
     * Check if "ip" has been set
     *
     * @return bool True if "ip" has been set, false if not
     */
    public function hasIp() : bool;

    /**
     * Get a default "ip" value, if any is available
     *
     * @return string|null Default "ip" value or null if no default value is available
     */
    public function getDefaultIp() : ?string;
}