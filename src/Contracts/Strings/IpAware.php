<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $address IP address
     *
     * @return void
     */
    public function setIp($address);

    /**
     * Get ip
     *
     * If no "ip" value has been set, this method will
     * set and return a default "ip" value,
     * if any such value is available
     *
     * @see getDefaultIp()
     *
     * @return string|null "ip" value or null if no "ip" value has been set
     */
    public function getIp();

    /**
     * Get a default "ip" value, if any is available
     *
     * @return string|null A default "ip" value or null if no default value is available
     */
    public function getDefaultIp();

    /**
     * Check if "ip" has been set
     *
     * @return bool True if "ip" value has been set, false if not
     */
    public function hasIp();

    /**
     * Check if a default "ip" is available or not
     *
     * @return bool True of a default "ip" value is available, false if not
     */
    public function hasDefaultIp();
}