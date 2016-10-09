<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $identifier Identifier of a host
     *
     * @return void
     */
    public function setHost($identifier);

    /**
     * Get host
     *
     * If no "host" value has been set, this method will
     * set and return a default "host" value,
     * if any such value is available
     *
     * @see getDefaultHost()
     *
     * @return string|null "host" value or null if no "host" value has been set
     */
    public function getHost();

    /**
     * Get a default "host" value, if any is available
     *
     * @return string|null A default "host" value or null if no default value is available
     */
    public function getDefaultHost();

    /**
     * Check if "host" has been set
     *
     * @return bool True if "host" value has been set, false if not
     */
    public function hasHost();

    /**
     * Check if a default "host" is available or not
     *
     * @return bool True of a default "host" value is available, false if not
     */
    public function hasDefaultHost();
}