<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $version Version
     *
     * @return self
     */
    public function setVersion(?string $version);

    /**
     * Get version
     *
     * If no "version" value has been set, this method will
     * set and return a default "version" value,
     * if any such value is available
     *
     * @see getDefaultVersion()
     *
     * @return string|null version or null if no version has been set
     */
    public function getVersion() : ?string ;

    /**
     * Check if "version" has been set
     *
     * @return bool True if "version" has been set, false if not
     */
    public function hasVersion() : bool;

    /**
     * Get a default "version" value, if any is available
     *
     * @return string|null Default "version" value or null if no default value is available
     */
    public function getDefaultVersion() : ?string;
}