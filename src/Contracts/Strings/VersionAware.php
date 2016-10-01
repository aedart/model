<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Version Aware</h1>
 *
 * Component is aware of a string "version" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface VersionAware
{
    /**
     * Set version
     *
     * @param string $version Version
     *
     * @return void
     */
    public function setVersion($version);

    /**
     * Get version
     *
     * If no "version" value has been set, this method will
     * set and return a default "version" value,
     * if any such value is available
     *
     * @see getDefaultVersion()
     *
     * @return string|null "version" value or null if no "version" value has been set
     */
    public function getVersion();

    /**
     * Get a default "version" value, if any is available
     *
     * @return string|null A default "version" value or null if no default value is available
     */
    public function getDefaultVersion();

    /**
     * Check if "version" has been set
     *
     * @return bool True if "version" value has been set, false if not
     */
    public function hasVersion();

    /**
     * Check if a default "version" is available or not
     *
     * @return bool True of a default "version" value is available, false if not
     */
    public function hasDefaultVersion();
}