<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Package Aware</h1>
 *
 * Component is aware of a string "package" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface PackageAware
{
    /**
     * Set package
     *
     * @param string|null $name Name of package. Can evt. contain path to package as well
     *
     * @return self
     */
    public function setPackage(?string $name);

    /**
     * Get package
     *
     * If no "package" value has been set, this method will
     * set and return a default "package" value,
     * if any such value is available
     *
     * @see getDefaultPackage()
     *
     * @return string|null package or null if no package has been set
     */
    public function getPackage() : ?string ;

    /**
     * Check if "package" has been set
     *
     * @return bool True if "package" has been set, false if not
     */
    public function hasPackage() : bool;

    /**
     * Get a default "package" value, if any is available
     *
     * @return string|null Default "package" value or null if no default value is available
     */
    public function getDefaultPackage() : ?string;
}