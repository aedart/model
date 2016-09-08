<?php
namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Version Aware</h1>
 *
 * Component is aware of a version, which can also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface VersionAware
{
    /**
     * Set the given version
     *
     * @param string $version Version
     *
     * @return void
     */
    public function setVersion($version);

    /**
     * Get the given version
     *
     * If no version has been set, this method will
     * set and return a default version, if any such
     * value is available
     *
     * @see getDefaultVersion()
     *
     * @return string|null version or null if none version has been set
     */
    public function getVersion();

    /**
     * Get a default version value, if any is available
     *
     * @return string|null A default version value or Null if no default value is available
     */
    public function getDefaultVersion();

    /**
     * Check if version has been set
     *
     * @return bool True if version has been set, false if not
     */
    public function hasVersion();

    /**
     * Check if a default version is available or not
     *
     * @return bool True of a default version is available, false if not
     */
    public function hasDefaultVersion();
}