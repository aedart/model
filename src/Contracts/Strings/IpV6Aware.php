<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $address IPv6 address
     *
     * @return void
     */
    public function setIpV6($address);

    /**
     * Get ip v6
     *
     * If no "ip v6" value has been set, this method will
     * set and return a default "ip v6" value,
     * if any such value is available
     *
     * @see getDefaultIpV6()
     *
     * @return string|null "ip v6" value or null if no "ip v6" value has been set
     */
    public function getIpV6();

    /**
     * Get a default "ip v6" value, if any is available
     *
     * @return string|null A default "ip v6" value or null if no default value is available
     */
    public function getDefaultIpV6();

    /**
     * Check if "ip v6" has been set
     *
     * @return bool True if "ip v6" value has been set, false if not
     */
    public function hasIpV6();

    /**
     * Check if a default "ip v6" is available or not
     *
     * @return bool True of a default "ip v6" value is available, false if not
     */
    public function hasDefaultIpV6();
}