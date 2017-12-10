<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>License Aware</h1>
 *
 * Component is aware of a string "license" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface LicenseAware
{
    /**
     * Set license
     *
     * @param string|null $identifier License name or identifier
     *
     * @return self
     */
    public function setLicense(?string $identifier);

    /**
     * Get license
     *
     * If no "license" value has been set, this method will
     * set and return a default "license" value,
     * if any such value is available
     *
     * @see getDefaultLicense()
     *
     * @return string|null license or null if no license has been set
     */
    public function getLicense() : ?string ;

    /**
     * Check if "license" has been set
     *
     * @return bool True if "license" has been set, false if not
     */
    public function hasLicense() : bool;

    /**
     * Get a default "license" value, if any is available
     *
     * @return string|null Default "license" value or null if no default value is available
     */
    public function getDefaultLicense() : ?string;
}